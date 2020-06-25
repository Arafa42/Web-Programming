<?php


if(isset($_POST["submitted"])){

$antw = $_POST["quiz"];

}


function StuurTerug($antw){

  $stuur =  "Je antwoord was $antw<p>";
  $stuur .= "<a href='start.php?pagina=quiz'>opnieuw spelen?</a>";
    
  return $stuur;

}



return StuurTerug($antw);

?>