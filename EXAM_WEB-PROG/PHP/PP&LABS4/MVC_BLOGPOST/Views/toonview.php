<?php
$terugsturen = "<h1>TONEN</h1>";
foreach ($toon->tekst as $blog) {
    $terugsturen.= "id : " .$blog->id. "<br>title:" .$blog->title. "<p>";
}
return $terugsturen;

?>


