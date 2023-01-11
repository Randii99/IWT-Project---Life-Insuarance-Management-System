<?php

$fname = $_POST{"fname"};
$lname = $_POST{"lname"};
$uname = $_POST{"uname"};
$email = $_POST{"email"};
$cno = $_POST{"cno"};
$password = $_POST{"password"};


$connection = mysqli_connect('localhost','root','','life');

$query= mysqli_query($connection, "SELECT * FROM reg WHERE email= '$email'");
if(mysqli_num_rows($query)>0)
{
    echo '<script type="text/javascript">alert("Email is already used!!")</script>';
}
else
{
    $sql = "INSERT INTO reg (id, first_name, last_name, username, email, contact_no, password)
            VALUE('', '{$fname}', '{$lname}', '{$uname}', '{$email}', '{$cno}', '{$password}')";

     $result = mysqli_query($connection ,$sql);

    if($result)
        {
            echo header ("location:../html/login.html");
        }
    else
        {
            echo '<script type="text/javascript">alert("Fail to Loging!!")</script>';
        }
}

?>