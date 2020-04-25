<?php

$paginaData = new stdClass();

$paginaData->titel="Mijn MuntConverter";

$paginaData->content  = include_once "views/navigation.php";
$paginaData->css = "<link href='style/style.css' rel='stylesheet'/>";
$isClicked = isset($_GET["pagina"]);
if($isClicked){
    $fileToLoad = $_GET["pagina"];
   
}
else{
    $fileToLoad = "muntconverter";
}
$paginaData->content .= include_once "views/$fileToLoad.php";

$pagina = include_once "template/view.php";

echo $pagina;

?>


