<?php

$paginaData = new stdClass();

$paginaData->titel="Mijn Rekenmachine";

$paginaData->content  = include_once "views/navigation.php";
$paginaData->css = "<link href='style/style.css' rel='stylesheet'/>";
$isClicked = isset($_GET["pagina"]);
if($isClicked){
    $fileToLoad = $_GET["pagina"];
   
}
else{
    $fileToLoad = "rekenmachine";
}
$paginaData->content .= include_once "views/$fileToLoad.php";

$pagina = include_once "template/view.php";

echo $pagina;

?>


