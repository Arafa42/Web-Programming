<?php


$paginaData = new stdClass();

$paginaData->titel = "Titel Lan";
$paginaData->css = "<link rel='stylesheet' href='Style/style.css'>";
$isClicked = isset($_GET["pagina"]);

$paginaNav = include_once "Views/navigatie.php";

$paginaData->content = $paginaNav;

if($isClicked){

$fileToLoad = $_GET["pagina"];
}
else {

$fileToLoad = "muntconverter";

}

$paginaData->content .= include_once "Views/$fileToLoad.php";


$paginaTemp = include_once "Templates/view.php";

echo $paginaTemp;





?>