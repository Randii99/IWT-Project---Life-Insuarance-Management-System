function matchpass()
{
    var firstpassword=document.retype.password.value;
    var secondpassword=document.retype.password1.value;
    if(firstpassword == secondpassword)
    {  
      alert("Password successfully changed")
       return true;

    }
    else
    {
       alert("password must be same");
       return false;
    }
}

