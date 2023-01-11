/*function reenter()
{
   var password1=document.getElementById("password1").value;
   var password2=document.getElementById("password2").value;
   if(password1==password2)
   {
      alert("password matched");
    

   }
   else{
      alert("password does not matched");
   }
}


function passwords(){

   if (document.getElementById("password1").value != document.getElementById("password2").value){
       document.getElementById("pawEr").innerHTML = "*Password does not match*";
       return false;
      }
 }*/


 function cal()
{
    var firstpassword=document.retype.password.value;
    var secondpassword=document.retype.password1.value;
    if(firstpassword == secondpassword)
    {  
     
       return true;

    }
    else
    {
       alert("password must be same");
       return false;
    }
}