<?php
    $waarde2 = "";
    $waarde = ""; //initeel zet je waarde op een lege string, want deze pagina wordt altijd herladen
    if(isset($_GET["result"]) && isset($_GET["result2"])){
        $waarde = $_GET["result"]; //als er iets in het tekstvak (result)staat ga ik dit aan mijn variabele waarde toekennen
        $waarde2 = $_GET["result2"];
        
    }
    if(isset($_GET["1"])){ //ik klik op 1
        $waarde .= "1"; //concateneer 1 aan wat er in de variabele $waarde zit
        $waarde2 .= "1";
    }
    else if(isset($_GET["2"])){ //ik klik op 2
        $waarde .= "2";
        $waarde2 .= "2";
    }
    else if(isset($_GET["3"])){ //ik klik op 3
        $waarde .= "3";
        $waarde2 .= "3";
    }
    else if(isset($_GET["4"])){ //ik klik op 4
        $waarde .= "4";
        $waarde2 .= "4";
    
    }
    else if(isset($_GET["5"])){ //ik klik op 5
        $waarde .= "5";
        $waarde2 .= "5";

    }
    else if(isset($_GET["6"])){ //ik klik op 6
        $waarde .= "6";
        $waarde2 .= "6";
        
    }
    else if(isset($_GET["7"])){ //ik klik op 7
        $waarde .= "7";
        $waarde2 .= "7";

    }
    else if(isset($_GET["8"])){ //ik klik op 8
        $waarde .= "8";
        $waarde2 .= "8";

    }
    else if(isset($_GET["9"])){ //ik klik op 9
        $waarde .= "9";
        $waarde2 .= "9";

    }
    else if(isset($_GET["0"])){ //ik klik op 0
        $waarde .= "0";
        $waarde2 .= "0";

    }





     else if(isset($_GET["+"])){ //ik klik op +
        $waarde = "";
        $waarde2 .= "+";
    }
    else if(isset($_GET["-"])){ //ik klik op -
        $waarde = "";
        $waarde2 .= "-";
    }

    else if(isset($_GET["*"])){ //ik klik op *
        $waarde = "";
        $waarde2 .= "*";
    }

    else if(isset($_GET["/"])){ //ik klik op /
        $waarde = "";
        $waarde2 .= "/";
    }

    else if(isset($_GET["clear"])){ //ik klik op +
        $waarde = "";
        $waarde2 = "";
    }
    
     else if(isset($_GET["="])){ //ik klik op =
        //The eval() function evaluates a string as PHP code.
         //in $waarde zit bijvoorbeeld 1+1
         //dus de eval functie gaat letterlijk de string $result = 1+1 naar uitvoerbare code transformeren, hieruit haal je dan de variabele $result en ken je toe aan $waarde.
         eval('$result = '.$waarde2.';'); 
        
         $waarde2 = $result;
         $waarde = $waarde2;  
              
    }   
    
    // ik schrijf php code in het value attribuut. Ik print de php waarde hierin. Ik print dit op de server want de client(=browser) kent enkel html/css/javascript & tekst -->
   
   return "<form method='get' action=''>
     
       <input type='text' name='result' value= $waarde>
       <input type='hidden' name='result2' value= $waarde2>
       <br>
       <input type='submit' name='1' value='1'>
       <input type='submit' name='2' value='2'>
       <input type='submit' name='3' value='3'>
       <br>
       <input type='submit' name='4' value='4'>
       <input type='submit' name='5' value='5'>
       <input type='submit' name='6' value='6'>
       <br>
       <input type='submit' name='7' value='7'>
       <input type='submit' name='8' value='8'>
       <input type='submit' name='9' value='9'>
       <input type='submit' name='0' value='0'>
       <br>
       <input type='submit' name='+' value='+'>
       <input type='submit' name='-' value='-'>
       <input type='submit' name='*' value='*'>
       <input type='submit' name='/' value='/'>
       <input type='submit' name='=' value='='>
       <br>
       <input type='submit' name='clear' value='clear'>
       
   </form>";
?>
  
   