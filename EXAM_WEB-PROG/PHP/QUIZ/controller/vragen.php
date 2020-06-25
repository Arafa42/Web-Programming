<?php

$antw ="";

include_once "model/quiz.class.php";

$quiz = new Quiz($db);
$vragen = $quiz->GetAlleVragen();

$antw =  include_once "view/all-vragen.php";

return $antw;

?>