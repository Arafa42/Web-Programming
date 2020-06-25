<?php

$str = "<table border='1px solid black'>";
for ($i=0; $i < count($vragen); $i++) { 
 
    $str .= "<tr><td>" . $vragen[$i]->id . "</td><td>" . $vragen[$i]->vraag . "</td></tr>";

}

$str .= "</table>";

return $str;



?>