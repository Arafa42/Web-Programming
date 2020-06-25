<?php

$str = "<table border='1px solid black'>";
for ($i=0; $i < count($gasten); $i++) { 
 
    $str .= "<tr><td>" . $gasten[$i]->GastNr . "</td><td>" . $gasten[$i]->Naam . "</td></tr>";

}

$str .= "</table>";

return $str;



?>