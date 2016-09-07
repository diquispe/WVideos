<?php


function getRealUserIpLayout(){
    switch(true){
        case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}


$user_ip = getRealUserIpLayout();
$json = file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=c1416da6c08f2b88b3a37ddb48867efa9ade52750576b606f98379518e161ad9&format=json&ip='.$user_ip);
$array = json_decode($json, true);
$countryName =  $array['countryName'];

?>