var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "carla" && password == "carnavales2019"){
alert ("WELLCOME CARLA ...  XD");
window.location = "indexindexcarlaletter010217022019.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("tu tienes "+attempt+" intentos");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}