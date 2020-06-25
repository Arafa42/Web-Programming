<?php

include_once "Models/Repository.class.php";


if(isset($_POST["sbmt"])){
$rep = new Repository();
$rep->AddBlog($_POST["title"],$_POST["bericht"],$_POST["datum"],$_POST["username"]);
$toon = new stdClass();
$toon->tekst=null;
$toon->tekst = $rep->ShowRepo();

return include_once "Views/toonview.php";



}

?>