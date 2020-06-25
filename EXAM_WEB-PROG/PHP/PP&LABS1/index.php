<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    


    <!--OEF COUNTER FORMULIER-->
<form action="index.php" method="get">
Getal: <input type="text" name="getal">
<input type="submit">
</form>

<p>
    <!--PROBLEEM-->
<form action="index.php" method="get">
Naam: <br>
<input type="text" name="nm"><br>
# of problems:<br>
<input type="text" name="prblms"><br>
Sum:<br>
<input type="text" name="som"><br>
<input type="submit" value="start">
</form>



</body>

<script></script>

<?php


//OEF COUNTER FORMULIER
if(isset($_GET["getal"])){
$gtl = $_GET["getal"];
echo "<h1>Tellen tot 4</h1>";
for ($i=1; $i <= $gtl; $i++) { 
    echo $i;
echo "<br>";
}
}




//PROBLEEM


if(isset($_GET["nm"]) && isset($_GET["prblms"]) && isset($_GET["som"])){
    $nm = $_GET["nm"];
    $prblms = $_GET["prblms"];
    $som = $_GET["som"];
    $form = "<form action='index.php' method='get'>";
    $form .= "<input type='text' name='haantal' value='".$prblms."' hidden>";
    $form .= "<input type='text' name='hsom' value='".$som."' hidden>";
    $form .= "<input type='text' name='hnaam' value='".$nm."' hidden>";


for ($i=0; $i < $prblms; $i++) { 
  
    $form .= $i . "+" . $som ."<input type='text' name='".$i."'>" . "<br>";
}
$form .= "<input type='submit'></form>";
echo $form;
}
   

if(isset($_GET["haantal"])){

    $tot=0;
    for ($i=0; $i < $_GET["haantal"]; $i++) { 
    $res = $_GET[$i];
    if($res == ($_GET["hsom"]+$i)){
    $tot++;
   }
   }

echo $_GET["hnaam"] . " BEHAALDE EEN SCORE VAN " . $tot . "/" . $_GET["haantal"];

}






?>



</html>
