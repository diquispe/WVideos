<?php
$dbhost     = 'localhost';
$dbusername = 'xvideose_web';
$dbuserpass = '}RPo1H0;Pu==';
$dbname     = 'xvideose_web';

// Ahora conectamos a la base de datos.
//mysql_connect($dbhost, $dbusername, $dbuserpass);
$mysqli = new mysqli($dbhost, $dbusername,$dbuserpass, $dbname);

if ($mysqli -> connect_errno) {
    die( "Fallo la conexion a MySQL: (" . $mysqli -> mysqli_connect_errno()
        . ") " . $mysqli -> mysqli_connect_error());
}
else
    //echo "Conexión exitosa!";



// y la seleccionamos para poder trabajar con ella.
//mysql_select_db($dbname) or die('Cannot select database');

/***************************************************************

 * Conection Params Page - importxml.php
 * Author: J. Manuel Navarro ( http://www.manuelnavarro.com )
 *
 * Script ejemplo de importacion de XML a mySql con PHP 5
 ***************************************************************/
// Variable con el nombre del fichero a importar


$xml_file = 'public_html/rss.xml';



if (file_exists($xml_file)) {
    $xml = simplexml_load_file($xml_file);
} else {
    exit('Error al intentar abrir el fichero ' . $xml_file);
}


function multiexplode ($delimiters,$string) {
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}


    //Convierte una cadena a formato compatible con URL (minúsculas, sin acentos, espacios por guiones)
    function convertirUrl($cadena) {
        $eliminar=array("!","¡","?","¿","‘","\"","$","(",")",".",":",";","_","/","//","\\","\$","%","@","#",",", "«", "»","&");
        $buscados=array(" ","á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","Ñ","ü","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
        $sustitut=array("-","a","e","i","o","u","a","e","i","o","u","n","n","u","a","e","i","o","u","A","E","I","O","U");
        $final=strtolower(str_replace($buscados,$sustitut,str_replace($eliminar,"",$cadena)));
        $final=str_replace("–","-",$final);
        $final=str_replace("–","-",$final);
        return (strlen($final)>50) ? substr($final,0,strrpos(substr($final,0,50),"-")):$final;
    }

/* Recorremos el XML */
$count = 0;
//echo $xml;
foreach ($xml->channel->item as $item) {

    //echo $item->title.'<br>';
    $title = $item->title;
    $status = "vacio";

$result = $mysqli->query("SELECT MAX(id) AS id FROM videos");

    while ($row = $result->fetch_assoc()) {
        $id =  $row['id'];
        $id = $id + 1;
    }

    $url_video = utf8_encode($item->title);
    $link = $id."-".convertirUrl($url_video); // aqui ponemos la url en base a la sanitizacion del titulo
    $user_id = "1";
    $category_id = "1";
    $id_video = $item->guid;
    $description =
    $publicado = "1";
    $revisado = "1";
    $created_at = date('Y-m-d H:i:s'); // 2016-05-09 19:25:51
    $updated_at = "2010";
    $mysqli->query('SET foreign_key_checks = 0');


    //$text = "here is a sample; this text, and this will be exploded. this also | this one too :)";
    $text = $item->description;
    //$text = "Duration : 6 min<br>Url : http://www.xvideos.com/video20760719/hot_teen_meets_her_idol_and_fucks_him_<br><img src='http://img100-719.xvideos.com/videos/thumbs/19/1f/bc/191fbc6b3dd6818cc24225ae1b6125d2/191fbc6b3dd6818cc24225ae1b6125d2.3.jpg'><br><img src='http://img100-719.xvideos.com/videos/thumbsll/19/1f/bc/191fbc6b3dd6818cc24225ae1b6125d2/191fbc6b3dd6818cc24225ae1b6125d2.3.jpg'><br>&lt;div id=&quot;xv-embed-20760719&quot;&gt;&lt;/div&gt; &lt;script type=&quot;text/javascript&quot;&gt; (function() { var tn = document.createElement('script'); tn.type = 'text/javascript'; tn.async = true; tn.src = 'http://flashservice.xvideos.com/embedcode/20760719/510/400/embed.js'; var s = document.getElementById('xv-embed-20760719'); s.parentNode.insertBefore(tn, s); })(); &lt;/script&gt;";
    $exploded = multiexplode(array("<br>", "<br><img src='", "><br><img src='", "'><br>"),$text);

    $duracion = $exploded[0];
    $id = $exploded[1];
    $id_video = substr($id, 34, 8);

    /*
     * Mosaico de imagenenes procesado a partir de la imagen principañ
     */

    $imagen1 = $exploded[3];


    $imagen2 = $exploded[3]; // ya no se va usa y se cargará con la misma imagen en bruto
    $imagen3 = $exploded[3];
    $imagen_principal = $exploded[3];


    $nueva_cadena = explode("/", $imagen1);
    $imagen1 = $nueva_cadena[0]."//".$nueva_cadena[1].$nueva_cadena[2]."/".$nueva_cadena[3]."/".$nueva_cadena[4]."/".$nueva_cadena[5]."/".$nueva_cadena[6]."/".$nueva_cadena[7]."/".$nueva_cadena[8]."/mozaiquehome.jpg";

    $imagen_nombre_aleatorio = rand(10000000000000, 99999999999999);
    copy($imagen1,"public_html/thumbs_mozaico/mozaico-".$imagen_nombre_aleatorio.'.jpg');

    echo $imagen1."<br>";

    $imagen1= "mozaico-".$imagen_nombre_aleatorio.".jpg";




    if ($mysqli->query("INSERT INTO videos  (title, status, url, user_id, category_id, id_video, descripcion, duracion, publicado, revisado, imagen1, imagen2, imagen3, imagen_principal, created_at, updated_at)  
                        VALUES              ('".$title."', '".$status."', '".$link."', '".$user_id."', '".$category_id."', '".$id_video."', '".$title."', '".$duracion."', '".$publicado."', '".$publicado."', '".$imagen1."', '".$imagen2."', '".$imagen3."', '".$imagen_principal."', '".$created_at."', '".$updated_at."') " ) === TRUE) {
        //printf($mysqli->affected_rows." Filas afectadas");
    }

    else
        echo "Error al ejecutar el comando:".$mysqli->error;



    $count++;
}

echo "";
echo "-------------------------------------------";
echo "Total de libros importados: $count cantidad";
echo "-------------------------------------------";
// aqui me esta apareciendo un error
$mysqli->mysqli_close();


?>