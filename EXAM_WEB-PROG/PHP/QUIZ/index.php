<?php


$paginaData = new stdClass();

$paginaData->titel = "Titel Lan";
$paginaData->css = "<link rel='stylesheet' href='Style/style.css'>";


$paginaNav = include_once "view/navigation.php";

$paginaData->content = $paginaNav;


$dbInfo = "mysql:host=localhost;dbname=quizdb";
$dbUser = "root";
$dbPassword = "";




try {
    $db = new PDO($dbInfo,$dbUser,$dbPassword);
  $paginaData->content .= "<p>connection established</p>";

} catch (Exception $e) {
  $paginaData->content = "connection failed";
}







$isClicked = isset($_GET["pagina"]);


if($isClicked){

$fileToLoad = $_GET["pagina"];
}
else {

$fileToLoad = "quiz";

}

$paginaData->content .= include_once "controller/$fileToLoad.php";


$paginaTemp = include_once "Templates/template.php";

echo $paginaTemp;





?>