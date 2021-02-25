<?php
/**
 * Created by PhpStorm.
 * User: lime
 * Date: 06.09.17
 * Time: 21:12
 */

// http://phptester.net/
$str    = "Club-Haus, Alter Bahnhof, Alter Botanischer Garten, Alter Markt, Altstadt";
$strtmp = explode(",", $str);
echo "<textarea>";
echo json_encode($strtmp, true);