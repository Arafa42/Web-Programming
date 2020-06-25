<?php


$zk = "<form method='get'>";
$zk.= "<input type='text' name='naam'>";
$zk.= "<input type='submit' name='submitted'>";
$zk.= "</form>";

$zk .= "<p></p>";
$zk .= "<table border='1px solid black'>";


for ($i=0; $i < count($gasten); $i++) { 
    
    if(isset($gasten))
    $zk .= "<tr><td>" . $gasten[$i]->GastNr . "</td><td>" . $gasten[$i]->Naam . "</td></tr>";

}

$zk .= "</table>";


return $zk;



?>