function reenter()
{
    var passwordone=document.retype.password1.value;
    var passwordtwo=document.retype.password2.value;
    if(passwordone == passwordtwo)
    {
        alert("Password successfully changed");
       return true;

    }
    else
    {
       alert("password must be same");
       return false;
    }
}

