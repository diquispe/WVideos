<?php

//$delimiters has to be array
//$string has to be array

function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}


//$text = "here is a sample; this text, and this will be exploded. this also | this one too :)";
$text = "Duration : 6 min<br>Url : http://www.xvideos.com/video20760719/hot_teen_meets_her_idol_and_fucks_him_<br><img src='http://img100-719.xvideos.com/videos/thumbs/19/1f/bc/191fbc6b3dd6818cc24225ae1b6125d2/191fbc6b3dd6818cc24225ae1b6125d2.3.jpg'><br><img src='http://img100-719.xvideos.com/videos/thumbsll/19/1f/bc/191fbc6b3dd6818cc24225ae1b6125d2/191fbc6b3dd6818cc24225ae1b6125d2.3.jpg'><br>&lt;div id=&quot;xv-embed-20760719&quot;&gt;&lt;/div&gt; &lt;script type=&quot;text/javascript&quot;&gt; (function() { var tn = document.createElement('script'); tn.type = 'text/javascript'; tn.async = true; tn.src = 'http://flashservice.xvideos.com/embedcode/20760719/510/400/embed.js'; var s = document.getElementById('xv-embed-20760719'); s.parentNode.insertBefore(tn, s); })(); &lt;/script&gt;";
$exploded = multiexplode(array("<br>", "<br><img src='", "><br><img src='", "'><br>"),$text);

echo $exploded[0]."<br>";
$id = $exploded[1];
$id = substr($id, 34, 8)."<br>";
echo $id;
//echo $exploded[1]."<br>";

echo '<img src="'.$exploded[2].'"><br>';
echo '<img src="'.$exploded[3].'"><br>';



?>