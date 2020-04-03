var teller=0;
var teller2=0;
var teller3=0;


function ChangeBgColor(){
teller++;
var test = document.getElementById("text");
if(teller %2 !=0){test.style.background = "yellow"}
else {test.style.background = "None"}
}


function VeranderText(){
teller2++;
var test2 = document.getElementById("text2").value;
if(teller2 %2 !=0){
test2 = document.getElementById("text2").value="Verander";
console.log(test2);
console.log(teller2);
}
else{
test2 = document.getElementById("text2").value = "1";
console.log(test2);
console.log(teller2);
}
}


function menu(){
teller3++;
var gtl1 = document.getElementById("gtl1");
var gtl2 = document.getElementById("gtl2");
var gtl3 = document.getElementById("gtl3");


if(teller3<4){

if(teller3%2==0){
    gtl1.style.background = ""
    gtl2.style.background = "red"
    gtl3.style.background = ""
}
else if(teller3%3==0){
    gtl1.style.background = ""
    gtl2.style.background = ""
    gtl3.style.background = "red"
}
else{
    gtl1.style.background = "red"
    gtl2.style.background = ""
    gtl3.style.background = ""
}
}
else{teller3=1;
    gtl1.style.background = "red"
    gtl2.style.background = ""
    gtl3.style.background = ""
}
console.log(teller3);

}



function TabelColor(){



var tabel = document.getElementsByTagName("TABLE")[0];

var kak = tabel.getElementsByTagName("TR")[0];
var kak1 = tabel.getElementsByTagName("TR")[1];
var kak2 = tabel.getElementsByTagName("TR")[2];
var kak3 = tabel.getElementsByTagName("TR")[3];

var pipi = kak.getElementsByTagName("TD")[0];
var pipi1 = kak.getElementsByTagName("TD")[1];

var kiki = kak1.getElementsByTagName("TD")[0];
var kiki1 = kak1.getElementsByTagName("TD")[1];

var didi = kak2.getElementsByTagName("TD")[0];
var didi1 = kak2.getElementsByTagName("TD")[1];

var lili = kak3.getElementsByTagName("TD")[0];
var lili1 = kak3.getElementsByTagName("TD")[1];


if(pipi.innerHTML >= 10){pipi.style.background = "red";}
if(kiki.innerHTML >=10){kiki.style.background = "red";}
if(didi.innerHTML >=10){didi.style.background = "red";}
if(lili.innerHTML >=10){lili.style.background = "red";}

if(pipi1.innerHTML >= 10){pipi1.style.background = "red";}
if(kiki1.innerHTML >=10){kiki1.style.background = "red";}
if(didi1.innerHTML >=10){didi1.style.background = "red";}
if(lili1.innerHTML >=10){lili1.style.background = "red";}


}


function gebDatum(){

var namen = ["Pllum","Afa","Froes","ChiChi"];
var geb_datum = ["20/03/2013","30/06/1999","12/01/2000","06/09/1969"];
    
var input = document.getElementById("namen");
var gb = document.getElementById("gbVanNaam");

if(input.value == namen[0]){gb = document.getElementById("gbVanNaam").value = geb_datum[0];}
else if(input.value == namen[1]){gb = document.getElementById("gbVanNaam").value = geb_datum[1];}
else if(input.value == namen[2]){gb = document.getElementById("gbVanNaam").value = geb_datum[2];}
else if(input.value == namen[3]){gb = document.getElementById("gbVanNaam").value = geb_datum[3];}
else{gb = document.getElementById("gbVanNaam").value = "default";}

}


function Random(){


var een = document.getElementById("1").value;
var twee = document.getElementById("2").value;
var drie = document.getElementById("3").value;
var vier = document.getElementById("4").value;
var vijf = document.getElementById("5").value;
var zes = document.getElementById("6").value;
var zeven = document.getElementById("7").value;
var acht = document.getElementById("8").value;
var negen = document.getElementById("9").value;
var tien = document.getElementById("10").value;
var elf = document.getElementById("11").value;
var twaalf = document.getElementById("12").value;
var total = document.getElementById("thot").value;



var arr=[];
var enen=0;
var tween=0;
var drien=0;
var vieren=0;
var vijven=0;
var zessen=0;
var zevenen=0;
var achten=0;
var negenen=0;
var tienen=0;
var elven=0;
var twaalven=0;

for(let i=0;i<1000;i++){
    arr[i] = Math.floor((Math.random() * 12) + 1);

    if(arr[i] == 1){ enen++;}
    if(arr[i] == 2){ tween++;}
    if(arr[i] == 3){ drien++;}
    if(arr[i] == 4){ vieren++;}
    if(arr[i] == 5){ vijven++;}
    if(arr[i] == 6){ zessen++;}
    if(arr[i] == 7){ zevenen++;}
    if(arr[i] == 8){ achten++;}
    if(arr[i] == 9){ negenen++;}
    if(arr[i] == 10){ tienen++;}
    if(arr[i] == 11){ elven++;}
    if(arr[i] == 12){ twaalven++;}

}

een = document.getElementById("1").value = "enen: " +enen;
var twee = document.getElementById("2").value ="tween: "+tween;
var drie = document.getElementById("3").value ="drieen: "+drien;
var vier = document.getElementById("4").value ="vieren: "+vieren;
var vijf = document.getElementById("5").value ="vijven: "+vijven;
var zes = document.getElementById("6").value ="zessen: "+zessen;
var zeven = document.getElementById("7").value ="zevenen: "+zevenen;
var acht = document.getElementById("8").value ="achten: "+achten;
var negen = document.getElementById("9").value ="negenen: "+negenen;
var tien = document.getElementById("10").value ="tienen: "+tienen;
var elf = document.getElementById("11").value ="elven: "+elven;
var twaalf = document.getElementById("12").value ="twaalven: "+twaalven;

var total = document.getElementById("thot").value ="Totaal: "+ Number(enen+tween+drien+vieren+vijven+zessen+zevenen+achten+negenen+tienen+elven+twaalven);


} 

