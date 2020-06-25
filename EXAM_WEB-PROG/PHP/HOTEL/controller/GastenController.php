<?php

$antw ="";

include_once "model/Gasten.php";

$quiz = new Gast($db);
$gasten = $quiz->GetAlleGasten();

$antw =  include_once "view/AlleGasten.php";

return $antw;

?>