<?php

$waarde="";
$waarde2="";

if(isset($_GET["res"]) && isset($_GET["res2"])){
    $waarde .= $_GET["res"];
    $waarde2 .= $_GET["res2"];

}
if(isset($_GET["1"])){
    $waarde .= $_GET["1"];
    $waarde2 .= $_GET["1"];

}
if(isset($_GET["2"])){
    $waarde .= $_GET["2"];
    $waarde2 .= $_GET["2"];

}
if(isset($_GET["plus"])){
    $waarde = "";
    $waarde2 .= $_GET["plus"];
}


if(isset($_GET["is"])){
  eval('$res = ' .$waarde2. ';');
  $waarde = $res;

}


if(isset($_GET["clear"])){
    $waarde = "";
    $waarde2 = "";

}


return "

<h1>REKENMACHINE</h1>
<p></p>
<form method='get' action=''>
<input type='text' name='res' value=$waarde><br>
<input type='hidden' name='res2' value= $waarde2>
<input type='submit' name='1' value='1'>
<input type='submit' name='2' value='2'>
<input type='submit' name='plus' value='+' >
<input type='submit' name='is' value='=' >
<input type='submit' name='clear' value='clear' >
</form>



";



?>
