//SOM VAN 2 GETALLEN

var gtl1 = prompt("GETAL 1");
var gtl2 = prompt("GETAL 2");

function som(getl1,getl2){
return parseFloat(getl1) + parseFloat(getl2);
}
console.log("SOM : " + som(gtl1,gtl2));




//CELSIUS FAHRETTIN

var grd = prompt("GEEF GRADEN IN");

function gradenToFahrettin(graden){
    return 9/5 * graden + 32;
}
console.log("FAHRENHEIT : " + gradenToFahrettin(grd));




//HUIDIGE DAG

var day;
var maand;
var jaar = new Date().getFullYear();

switch(new Date().getDay()){

    case 0:
        day = "Zondag";
    break;

    case 1:
        day = "Maandag";
    break;

    case 2:
        day = "Dinsdag";
    break;

    case 3:
        day = "Woensdag";
    break;

    case 4:
        day = "Donderdag";
    break;

    case 5:
        day = "Vrijdag";
    break;

    case 6:
        day = "Zaterdag";
    break;
}

switch(new Date().getMonth()){

    case 0:
        maand = "Januari";
    break;

    case 1:
        maand = "Februari";
    break;

    case 2:
        maand = "Maart";
    break;

    case 3:
        maand = "April";
    break;

    case 4:
        maand = "Mei";
    break;

    case 5:
        maand = "Juni";
    break;

    case 6:
        maand = "Juli";
    break;
 
    case 7:
        maand = "Augustus";
    break;

    case 8:
        maand = "September";
    break;

    case 9:
        maand = "Oktober";
    break;

    case 10:
        maand = "November";
    break;

    case 11:
        maand = "December";
    break;

}

console.log(day + " " + maand + " " + new Date().getDate() + " " + jaar);




// LOOPING A TRIANGLE

for (let i = 0; i < 7; i++) {
    
document.write("<br>");

for (let j = i; j >= 0; j--) {
document.write("*");
}
}
document.write("<br>");





//FIZZBUZZ
document.write("<p>");
for (let i = 1; i <= 100; i++) {
if(i%3==0 && i%5!=0){

    document.write("Fizz");
    document.write("<br>");
}
else if(i%5==0 && i%3!=0){

    document.write("Buzz");
    document.write("<br>");
}
else if(i%5==0 && i%3==0){

    document.write("FizzBuzz");
    document.write("<br>");
}
else {
    document.write(i);
    document.write("<br>");
}
}

var lengte = prompt("LENGTE SCHAAKBORD : ");
var breedte = prompt("BREEDTE SCHAAKBORD : ");

for (let i = 0; i < lengte; i++) {
    
    document.write("<br>");

    for (let j = 0; j < breedte; j++) {
        if(i%2==0){
        if(j%2==0){document.write("&nbsp&nbsp&nbsp");}   
        else {document.write("#");} 
        }
        else {
            if(j%2==0){document.write("#");}   
            else {document.write("&nbsp&nbsp&nbsp");} 
        }
    }
}




//DOBBELSTEEN

function gooiDobbels(aantal){
var dobbel = Math.round((Math.random()* (5*aantal) + (aantal-1))+1);
alert(dobbel);
}





//FACULTEIT

var fac = prompt("FACULTEIT GETAL : ");
function fact(nr){
var tot=1;
for (let i = nr; i > 0; i--) {
    tot *= i;
}
return tot;
}
console.log(fact(fac));





//MINIMUM

var min1 = prompt("GETAL1 VOOR MIN()");
var min2 = prompt("GETAL2 VOOR MIN()");
function min(gtl1,gtl2){
if(gtl1< gtl2){return gtl1;}
else{return gtl2;}
}
console.log(min(min1,min2));





//ISEVEN

var iseven = prompt("ISEVEN GETAL : ");
function isEven(gtl){
    if(gtl>0){
    if(gtl%2==0) return true;
    else{return false};
}
else{}
}
console.log(isEven(iseven));





//BEANCOUNTING

 //BCOUNT

 //var l = "kakak";
 //console.log(l.match(/k/g).length); 

var text = prompt("TEXT VOOR AANTAL B");
function BCount(text){
var counter=0
for (let i = 0; i < text.length; i++) {
    if(text[i] == "B" || text[i]== "b"){counter++;} 
}
return counter;
}
console.log(BCount(text));

//CountChar

var text2 = prompt("RANDOM TEXT");
var chr = prompt("1 HOOFDLETTER CHAR AUB");
function CharCount(text){
var counter=0
for (let i = 0; i < text2.length; i++) {
    if(text2[i] == chr || text2[i]== chr.toLowerCase()){counter++;} 
}
return counter;
}
console.log(CharCount(text2,chr));




//FLATTENING

let arrays = [[1,2,3],[4,5],[6],[6]];
var flat = arrays.reduce(function(a,b){
    return a.concat(b);
});
console.log(flat);



//OWN LOOP

function loop(n,action){
    for (let i = n; i > 0; i--) {
        action(i);        
    }
}
loop(3,console.log);



//EVERYTHING

function Everything(arr,check){
for (let i = 0; i < arr.length; i++) {
    if(check(arr[i]) == true){return true;}
}
return false;
}
console.log(Everything([1,2,3],n => n > 3 ));


//DOMINANT WRITING DIR

