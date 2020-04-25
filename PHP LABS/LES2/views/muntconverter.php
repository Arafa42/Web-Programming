<?php
$waarde = ""; 
$waarde2="";
$test= $_GET["munteenheid"];
$test2= $_GET["munteenheid2"];

if(isset($_GET["result"])){ $waarde = $_GET["result"]; }


//ZELFDE WAARDEN

    if(isset($_GET["convert"]) && $test=="EUR" && $test2=="EUR"){ 
         $waarde2= $waarde*1;    
    }
    else if(isset($_GET["convert"]) && $test=="USD" && $test2=="USD"){ 
        $waarde2= $waarde*1;    
   }
   else if(isset($_GET["convert"]) && $test=="PND" && $test2=="PND"){ 
    $waarde2= $waarde*1;    
}
else if(isset($_GET["convert"]) && $test=="YEN" && $test2=="YEN"){ 
    $waarde2= $waarde*1;    
}
else if(isset($_GET["convert"]) && $test=="LIRA" && $test2=="LIRA"){ 
    $waarde2= $waarde*1;    
}



//EUR
    else if(isset($_GET["convert"]) && $test=="EUR" && $test2=="USD"){ 
        $waarde2= $waarde*1.08;    
    }
    else if(isset($_GET["convert"]) && $test=="EUR" && $test2=="PND"){ 
        $waarde2= $waarde*0.87;    
    }
    else if(isset($_GET["convert"]) && $test=="EUR" && $test2=="LIRA"){ 
        $waarde2= $waarde*7.51;    
    }
    else if(isset($_GET["convert"]) && $test=="EUR" && $test2=="YEN"){ 
        $waarde2= $waarde*115.96;    
    }
    

 //USD   
    else if(isset($_GET["convert"]) && $test=="USD" && $test2=="EUR"){ 
        $waarde2= $waarde*0.93;    
    }
    else if(isset($_GET["convert"]) && $test=="USD" && $test2=="PND"){ 
        $waarde2= $waarde*0.81;    
    }
    else if(isset($_GET["convert"]) && $test=="USD" && $test2=="LIRA"){ 
        $waarde2= $waarde*6.97;    
    }
    else if(isset($_GET["convert"]) && $test=="USD" && $test2=="YEN"){ 
        $waarde2= $waarde*107.66;    
    }
    
//PND

    else if(isset($_GET["convert"]) && $test=="PND" && $test2=="USD"){ 
        $waarde2= $waarde*1.24;    
    }
    else if(isset($_GET["convert"]) && $test=="PND" && $test2=="EUR"){ 
        $waarde2= $waarde*1.15;    
    }
    else if(isset($_GET["convert"]) && $test=="PND" && $test2=="LIRA"){ 
        $waarde2= $waarde*8.60;    
    }
    else if(isset($_GET["convert"]) && $test=="PND" && $test2=="YEN"){ 
        $waarde2= $waarde*132.96;    
    }


//LIRA
    
    else if(isset($_GET["convert"]) && $test=="LIRA" && $test2=="USD"){ 
        $waarde2= $waarde*0.14;    
    }
    else if(isset($_GET["convert"]) && $test=="LIRA" && $test2=="PND"){ 
        $waarde2= $waarde*0.12;    
    }
    else if(isset($_GET["convert"]) && $test=="LIRA" && $test2=="EUR"){ 
        $waarde2= $waarde*0.13;    
    }
    else if(isset($_GET["convert"]) && $test=="LIRA" && $test2=="YEN"){ 
        $waarde2= $waarde*15.45;    
    }


//YEN
    
    else if(isset($_GET["convert"]) && $test=="YEN" && $test2=="USD"){ 
        $waarde2= $waarde*0.0093;    
    }
    else if(isset($_GET["convert"]) && $test=="YEN" && $test2=="PND"){ 
        $waarde2= $waarde*0.0075;    
    }
    else if(isset($_GET["convert"]) && $test=="YEN" && $test2=="LIRA"){ 
        $waarde2= $waarde*0.065;    
    }
    else if(isset($_GET["convert"]) && $test=="YEN" && $test2=="EUR"){ 
        $waarde2= $waarde*0.0086;    
    }
   


   return "<form method='get' action=''>
     
       <input type='number' name='result' value= $waarde>
       <select name='munteenheid'>
       <option name='euro'>EUR</option>
       <option name='dollar'>USD</option>
       <option name='pound'>PND</option>
       <option name='lira'>LIRA</option>
       <option name='yen'>YEN</option>
       </select>
       

      <br>
       <input type='text' disabled name='result2' value= $waarde2>
       <select name='munteenheid2'>
       <option name='euro2'>EUR</option>
       <option name='dollar2'>USD</option>
       <option name='pound2'>PND</option>
       <option name='lira2'>LIRA</option>
       <option name='yen2'>YEN</option>
       </select>
       <br>

       <input type='submit' name='convert' value='convert'>
       
   </form>";