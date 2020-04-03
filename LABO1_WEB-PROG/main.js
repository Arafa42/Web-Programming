console.log("Hello World!");


for (let i = 1; i < 7; i++) {

    document.write("<br>");

    for (let j = i; j > 0; j--) {
    
      
        document.write("z");
        
    }

}

document.write("<p>");

var abc = "abc";
document.write(abc + ", length : " + abc.length);

document.write("<p>");


for (let i = 0; i < 100; i++) {
    
    if(i % 3 == 0 && i%5!=0){
        console.log("Fizz");
    }

    else if(i%5 == 0 && i%3!=0){
console.log("Buzz");
    }

else if(i%3==0 && i%5==0){
console.log("FizzBuzz");
}

else{
console.log(i);
}    
}


document.write("<p>");


for (let i = 0; i < 4; i++) {

document.write("<br>");


for (let j = 0; j < 4; j++) {
    
    if(i%2==0){
    document.writeln( "&nbsp #");
    }

    else{
        document.write("&nbsp &nbsp#");
    }
}

    
}






function SchaakWaarde(){

  var waarde =  document.getElementById("form").value;


  document.write("<p>");


  for (let i = 0; i < waarde; i++) {
  
  document.write("<br>");
  
  
  for (let j = 0; j < waarde; j++) {
      
      if(i%2==0){
      document.writeln( "&nbsp #");
      }
  
      else{
          document.write("&nbsp &nbsp#");
      }
  }
      
  }
}



document.write("<p>");
document.write("//Check console voor fizzbuzz")




