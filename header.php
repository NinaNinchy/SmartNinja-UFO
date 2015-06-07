<?php
require_once('skripte/ez_sql_core.php');
require_once('skripte/ez_sql_mysql.php');

// Vzpostavitev komunikacije z bazo (povezava z bazo)
$db = new ezSQL_mysql('root','','ufo','localhost');
$db->query("SET NAMES UTF8"); //da so čžš pravilni



//vzami element videnja (iz seznama $videnja) in ga zapiši v videnje spremenljivko $videnja so array
// foreach ($videnja as $videnje) {
//     echo $videnje->lokacija."<br>";
// }

// echo $videnja[1]->izgled;

// echo "<pre>";
// print_r($videnja);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UFO projekt</title>

    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php">Domov</a></li>
                <li><a href="videnje.php">Dodaj videnje</a></li>
                <li><a href="index.php">Galerija</a></li>
            </ul>
        </nav>