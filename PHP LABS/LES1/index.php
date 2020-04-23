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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>




<form action="index.php" method="get">
<input name="txt1" type="number"><br>
<input name="submit" type="submit">
</form>



<p></p>


<form action="index.php" method="get">
<input name="naam" placeholder="name" type="text"><br>
<input name="problems" placeholder="problems" type="number"><br>
<input name="sums" placeholder="sums" type="number"><br>
<input name="submit" type="submit">
</form>




<p>




</body>
</html>






<?php



if(isset($_GET["txt1"])){

    $geetal = $_GET["txt1"];

    for ($i=1; $i <= $geetal; $i++) { 
        print $i ."<br>";
    }
}






if(isset($_GET["naam"]) && isset($_GET["problems"]) && isset($_GET["sums"])){
   
    $naam = $_GET["naam"];
    $problems = $_GET["problems"];
    $sums = $_GET["sums"];
    $valuesForm = "<form action='index.php' method='get'>";
    
    $valuesForm .= "<input type='hidden' name='probWaarde' value ='".$problems."'>";
    $valuesForm .= "<input type='hidden' name='sumWaarde' value ='".$sums."'>";
    $valuesForm .= "<input type='hidden' name='naamIn' value ='".$naam."'>";

for ($i=0; $i < $problems ; $i++) { 
    
  $valuesForm .= $i ."+". $sums . "<input type=text name='".$i."'><br>";
 

}



$valuesForm .= "<input type='submit'></form>";
print $valuesForm;
}



if(isset($_GET["probWaarde"]) && isset($_GET["sumWaarde"]) && isset($_GET["naamIn"])){

    $score=0;

    for ($i=0; $i < $_GET["probWaarde"]; $i++) { 
    

    $resultaatEcht = $_GET[$i];

    if($resultaatEcht ==  ($i + $_GET["sumWaarde"])){

            $score++;
    }


}

print $_GET["naamIn"] . "BEHAALDE EEN SCORE VAN : $score  /" . $_GET["probWaarde"];

}



?>