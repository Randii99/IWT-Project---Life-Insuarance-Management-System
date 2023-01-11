<?php

$name = $_POST{'name'};
$address = $_POST{'address'};
$telephone = $_POST{'telephone'};
$dob = $_POST{'dob'};
$id_num = $_POST{'id_num'};
$email = $_POST{'email'};
$password = $_POST{'password'};


$connection = mysqli_connect('localhost','root','','life');

$query= mysqli_query($connection, "SELECT * FROM sreg WHERE email= '$email'");
if(mysqli_num_rows($query))
{
	echo  '<script type="text/javascript">alert("use other email!!")</script>';
    
    
}
else
{
    $sql = "INSERT INTO sreg (ID,name,address,telephone,dob,id_num,email,password)
            VALUE('', '{$name}', '{$address}', '{$telephone}', '{$dob}', '{$id_num}', '{$email}', '{$password}')";

     $result = mysqli_query($connection ,$sql);

    if($result)
        {
            echo header('location:../html/S_login.html');
        }
    else
        {
            echo 'kela uanewn';
        }
}
    
?>