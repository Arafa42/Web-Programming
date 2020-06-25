<?php

$antw ="";

include_once "model/quiz.class.php";

$quiz = new Quiz($db);
$vraag = $quiz->GetVraag();


if(isset($_POST["submitted"]) && isset($_POST["quiz"])){

$antw = $_POST["quiz"];
}


$antw .=  include_once "view/quiz-form.php";

return $antw;

?>