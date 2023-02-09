

function changeForm(number){
  var format = document.getElementsByClassName('forms');
  if(number == 0){
    format[0].classList.remove("hidden");
    format[0].classList.add("form-style");
    format[1].classList.add("hidden");
    format[1].classList.remove("form-style");
  }
  else if(number == 1){
    format[1].classList.remove("hidden");
    format[1].classList.add("form-style");
    format[0].classList.add("hidden");
    format[0].classList.remove("form-style");
  }
}

var inputElements = document.getElementsByClassName("input");
var usernameValue = inputElements[0].value;
var passwordValue = inputElements[1].value;
console.log(inputElements);
console.log("username "+usernameValue);
console.log("password "+passwordValue);


function regex(){
  var /* EMRI*/firstnameRegex=/^[A-Z]{1}[a-z]{2,20}$/
  var firstname = document.getElementById('emri').value;

  
  var /* Mbiemri*/usernameRegex=/^[A-Z]{1}[a-z]{2,20}$/
  var username = document.getElementById('mbiemri').value;

   var /* email*/emailRegex=/^[a-zA-Z0-9]+@[a-zA-Z.-]+\.[com|net]{2,6}$/
   var email = document.getElementById('usernamei').value;

   var /* Password*/passwordRegex=/^[A-Z]{1}[a-z]{1,}[0-9]{1,4}$/
   var password = document.getElementById('passwordi').value;
   if(firstnameRegex.test(firstname)){
    console.log("Emri eshte ne rregull!");
  }else{
    alert("Emri nuk eshte ne rregull!");
  }
  if(usernameRegex.test(username)){
    console.log("Mbiemri  eshte ne rregull!");
  }else{
    alert("Mbiemri nuk eshte ne rregull!");
  }
  
  if(emailRegex.test(email)){
    console.log("Email eshte ne rregull!");
  }else{
    alert("Email nuk eshte ne rregull!");
  }
  if(passwordRegex.test(password)){
    console.log("Password eshte ne rregull!");
  }else{
    alert("Password nuk eshte ne rregull!");
  }
  if(passwordRegex.test(password) && emailRegex.test(email) && usernameRegex.test(username) && firstnameRegex.test(firstname) ){
    alert("Kyçja u krye me sukses!");
  }
}
function logini(){
  var emaili=/^[a-zA-Z0-9]+@[a-zA-Z.-]+\.[com|net]{2,6}$/
  var emailli = document.getElementById('useri').value;

  var passwordi=/^[A-Z]{1}[a-z]{1,}[0-9]{1,5}$/
  var passworddi = document.getElementById('pasi').value;

  if(emaili.test(emailli)){
   console.log("Email eshte ne rregull!");
  }else{
    alert("Email nuk eshte ne rregull!");
  }
  if(passwordi.test(passworddi)){
    console.log("Password eshte ne rregull!");
  }else{
    alert("Password nuk eshte ne rregull!");
  }
  if(emaili.test(emailli) & passwordi.test(passworddi)){
    alert("Kyçja u krye me sukses!");
  }
}