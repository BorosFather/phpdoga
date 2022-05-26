<?php
/*
* File: szamit.php
* Author: Boros Zoltán
* Copyright: 2022, Boros Zoltán
* Group: Szoft I N
* Date: 2022-05-026
* Github: https://github.com/BorosFather/
* Licenc: GNU GPL
*/

echo file_get_contents("template/head.html");
$page =  file_get_contents("template/szamit.html");

function szamitArray($tom, $mag){
    $index = $tom / pow($mag, 2);
    return $index;
}

if (!empty($_GET["tom"]) and !empty($_GET["mag"])){
    $tom = $_GET["tom"];
    $mag = $_GET["mag"];

    $index = szamitArray($tom, $mag);

}else{
    $index = "Hiba! Nincs minden kitőltve!";
}

$page = str_replace("{{ res }}", $index, $page);

echo $page;

echo file_get_contents("template/foot.html");