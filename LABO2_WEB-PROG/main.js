//OEF1
function Minimum(gtl1,gtl2){
return Math.min(gtl1,gtl2);
}
console.log(Minimum(10,30));

//OEF2
function IsEven(number){
if(number < 0){console.log("Number must be positive");}
else if(number %2 ==0){return "Number is even : " + true;}
else {return "Number is even : " + false;}
}
console.log(IsEven(12));

//OEF3
//3.1
function CountBs (word){
var bCounter=0;
for (let i = 0; i < word.length; i++) {
if(word[i] == "B"){bCounter++;}
}    
return bCounter;
}
console.log(CountBs("kakabBBB"));

//3.2
function CountChar(word,character){
var charCounter=0;
for(let i=0;i < word.length; i++){
if(word[i] == character){charCounter++;}
}
return charCounter;
}
console.log(CountChar("kakakaka","k"));

//HIGHER ORDER FUNCTIONS GEDEELTE
//OEF4
let arrays = [[1,2,3],[4,5],[6]];
var newArr = arrays.flat();
console.log(newArr);

//OEF5
function loop(start, test, update, body) {
    for (let value = start; test(value); value = update(value)) {
      body(value);
    }
  }
 
  loop(3, n => n > 0, n => n - 1, console.log);

//OEF6

function every(array,test){

for(let element of array){

    if(!test(element)){
        return false;
    }
}
return true;
}


console.log(every([1,3,5],n => n<10));
console.log(every([2,4,16],n => n<10));
console.log(every([],n => n<10));


//OEF7

//momenteel geen oplossing kunnen vinden