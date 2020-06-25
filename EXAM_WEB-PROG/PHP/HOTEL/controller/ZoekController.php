<?php


$antw ="";
$gasten = array();

if(isset($_GET['naam'])){
include_once "model/Gasten.php";
$quiz = new Gast($db);
$gasten = $quiz->ZoekGasten($_GET['naam']);
}


$antw =  include_once "view/Zoek.php";
return $antw;



?>
