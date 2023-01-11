function matchpass()
{
    var firstpassword=document.retype.password.value;
    var secondpassword=document.retype.password1.value;
    if(firstpassword == secondpassword)
    {
  
      alert("Registered successfully");
       return true;

    }
    else
    {
       alert("password must be same");
       return false;
    }
}

function enable()
{
   if (document.getElementById("box").checked)
   {
   document.getElementById("btn").disabled=false;
   }
   else
   {
   document.getElementById("btn").disabled=true;
   }
}