<?php

echo file_get_contents("template/head.html");
$page =  file_get_contents("template/szamit.html");

function szamitArray($tom, $mag){
    $index = $tom / pow($mag);
    return $index;
}

if (!empty($_GET["tom"]) and !empty($_GET["mag"])){
    $tom = $_GET["tom"];
    $mag = $_GET["mag"];

    $index = szamitArray($tom, $mag);

}else{
    $index = "Hiba! Nincs minden kitőltve!";
}

$page = str_replace("{{ res }}", $tom, $mag);

echo $page;

echo file_get_contents("template/foot.html");