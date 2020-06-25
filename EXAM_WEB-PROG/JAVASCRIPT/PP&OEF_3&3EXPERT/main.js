//CHANGE COLOR
function ChangeColor(kleur){
var txt = document.getElementById("tekst");
txt.style.color = kleur;
}




//CHANGE TEXT
function ChangeText(){
    var veranderttxt = document.getElementById("txtChange").value;
    var ptag = document.getElementById("change").innerHTML = veranderttxt;

}
function WisText(){
var t = document.getElementById("txtChange").value = " ";
}




//KLINKERTELLER
function KlinkerTeller(){
str = prompt("WOORD VOOR KLINKERS TE TELLEN : ");
tel = 0;
for (let i = 0; i < str.length; i++) {
    
    if(str[i] == 'a' || str[i] == 'e' || str[i] == 'o' || str[i] == 'u' || str[i] == 'i'){
        tel++;
    }
}
return tel;
}
console.log("KLINKERS: " + KlinkerTeller());




//EERSTE LETTER UPPERCASE

function HoofdLetterCheck(){
var wrd = "arafa"
console.log("HOOFDLETTER CHECK: " + wrd.charAt(0).toUpperCase() + wrd.substring(1));
}

HoofdLetterCheck();


//ACHTERGROND DIV
tlr = 0;
function Verander(){
tlr++;
console.log(tlr);
var t = document.getElementById("bg");
if(tlr%2!=0){t.style.backgroundColor = "yellow";}
else{t.style.backgroundColor = "white"}
}


//VERANDER TEXT
function Change(){
    document.getElementById("vrndr").innerHTML = "Verander";
}




//MENU BG
teller=0;
function Menu(){
teller++;
if(teller==1){
    document.getElementById("1").style.backgroundColor = "yellow";
    document.getElementById("2").style.backgroundColor = "";
    document.getElementById("3").style.backgroundColor = "";

}
else if(teller==2){
    document.getElementById("1").style.backgroundColor = "";
    document.getElementById("2").style.backgroundColor = "yellow";
    document.getElementById("3").style.backgroundColor = "";

}
else if(teller==3){
    document.getElementById("1").style.backgroundColor = "";
    document.getElementById("2").style.backgroundColor = "";
    document.getElementById("3").style.backgroundColor = "yellow";
    teller=0;
}
}


//KLEURBOVEN10
function KleurBovenTien(){

    for (let j = 0; j < 2; j++) {
           
    if(document.getElementsByTagName("TR")[0].getElementsByTagName("TD")[j].innerHTML >10){
        document.getElementsByTagName("TR")[0].getElementsByTagName("TD")[j].style.backgroundColor = "red"
    }
    else{console.log("false");}

    if(document.getElementsByTagName("TR")[1].getElementsByTagName("TD")[j].innerHTML >10){
        document.getElementsByTagName("TR")[1].getElementsByTagName("TD")[j].style.backgroundColor = "red"
    }
    else{console.log("false");}


    if(document.getElementsByTagName("TR")[2].getElementsByTagName("TD")[j].innerHTML >10){
        document.getElementsByTagName("TR")[2].getElementsByTagName("TD")[j].style.backgroundColor = "red"
    }
    else{console.log("false");}


    if(document.getElementsByTagName("TR")[3].getElementsByTagName("TD")[j].innerHTML >10){
        document.getElementsByTagName("TR")[3].getElementsByTagName("TD")[j].style.backgroundColor = "red"
    }
    else{console.log("false");}

}
}



//GEBOORTE DATUM


function GebDatum(){

namen = ["Afa","Lala","Fatih"];
geb_datums = ["20-03-2000","22-04-1990","29-05-1453"];

var nm = document.getElementById("naam").value;



for (let i = 0; i < namen.length; i++) {
   

if(namen[i] != nm){
    document.getElementById("gebdat").value = geb_datums[i];
}

}
}
 

//RANDOMDOBBELSTEEN


function RandomDobbel(){

arr = [];
tel1=0;
tel2=0;
tel3=0;
tel4=0;
tel5=0;
tel6=0;
tel7=0;
tel8=0;
tel9=0;
tel10=0;
tel11=0;
tel12=0;

for (let i = 0; i < 1000; i++) { 
arr[i] = Math.floor(Math.random()*12)+1;    

if(arr[i] == 1){tel1++;}
if(arr[i] == 2){tel2++;}
if(arr[i] == 3){tel3++;}
if(arr[i] == 4){tel4++;}
if(arr[i] == 5){tel5++;}
if(arr[i] == 6){tel6++;}
if(arr[i] == 7){tel7++;}
if(arr[i] == 8){tel8++;}
if(arr[i] == 9){tel9++;}
if(arr[i] == 10){tel10++;}
if(arr[i] == 11){tel11++;}
if(arr[i] == 12){tel12++;}
}

console.log("AANTAL 1 : " + tel1);
console.log("AANTAL 2 : " + tel2);
console.log("AANTAL 3 : " + tel3);
console.log("AANTAL 4 : " + tel4);
console.log("AANTAL 5 : " + tel5);
console.log("AANTAL 6 : " + tel6);
console.log("AANTAL 7 : " + tel7);
console.log("AANTAL 8 : " + tel8);
console.log("AANTAL 9 : " + tel9);
console.log("AANTAL 10 : " + tel10);
console.log("AANTAL 11 : " + tel11);
console.log("AANTAL 12 : " + tel12);
console.log("TOT : " + parseInt(tel1+tel2+tel3+tel4+tel5+tel6+tel7+tel8+tel9+tel10+tel11+tel12));

}


RandomDobbel();



//BALLON

var fsize=10;
document.onkeydown = function (e){

if(e.keyCode == 38){
    console.log("Top");
    fsize +=5;   

}
else if(e.keyCode == 40){
    console.log("Bottom");
    fsize -=5;
}

document.getElementById("ballon").style.fontSize = fsize + "px";
} 
