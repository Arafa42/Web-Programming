function Recept() {

var ing = ["ei","suiker","bloem"];
this.log = function() {
    for (let i = 0; i < ing.length; i++) {
        document.write(ing[i]);}};
this.voegToe = Voeg;


function Voeg(ingredient){
    ing.push(ingredient);
}


}

var rcp = new Recept();

rcp.log();
rcp.voegToe("siroop");
document.write("<br>");
rcp.log();


//ListToArray



let list = {
  value: 1,
  rest: {
    value: 2,
    rest: {
      value: 3,
      rest: null
    }
  }
};

function listToArray(inputList) {
  let arr = [];
  while (inputList.rest) {
    arr.push(inputList.value);
    inputList = inputList.rest;
  }
  arr.push(inputList.value);
  return arr;
}
console.log(listToArray(list)); // Zou [1, 2, 3] moeten zijn


//ArrayToList


function arrayToList(arr) {
    let list = null;
    for (let i = arr.length - 1; i >= 0; i--) {
      let a = 10;
      list = prepend(arr[i], list);
    }
    return list;
  }
  
  function prepend(value, list) {
    return {
      value: value,
      rest: list
    };
  }
  
  console.log(arrayToList([1, 2, 3, 4, 5]));