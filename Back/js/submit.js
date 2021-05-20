
function showAlert() {
	
    alert("Signed up successfully");

}

function allLetter(inputtxt)
 {
 var letters = /^[A-Za-z]+$/;
 if(inputtxt.value.match(letters))
 {
 return true;
 }
 else
 {
 alert("Please enter a valid Name");
 return false;
 }
 }
 
function checkEmail(str)
{
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(str))
    alert("Please enter a valid email address");
}
     
 function allnumeric(inputtxt)
 {
 var numbers = /^[0-9]+$/;
 if(inputtxt.value.match(numbers))
 {
 document.form1.text1.focus();
 return true;
 }
 else
 {
 alert('Put only numbers please');
 document.form1.text1.focus();
 return false;
 }
 }