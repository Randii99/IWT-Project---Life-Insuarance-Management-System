<?php

$name = $_POST{'name'};
$address = $_POST{'address'};
$telephone = $_POST{'telephone'};
$dob = $_POST{'dob'};
$idnumber = $_POST{'idnumber'};
$email = $_POST{'email'};
$password = $_POST{'password'};
$uname = $_POST{'uname'};


$connection = mysqli_connect('localhost','root','','life');

$query= mysqli_query($connection, "SELECT * FROM register WHERE email= '$email'");
if(mysqli_num_rows($query))
{
	echo  '<script type="text/javascript">alert("This email already exist!!")</script>';
    
    
}
else
{
    $sql = "INSERT INTO register (ID,name,address,tp_num,dob,id_num,email,password,user_name)
            VALUE('', '{$name}', '{$address}', '{$telephone}', '{$dob}', '{$idnumber}', '{$email}', '{$password}','{$uname}')";

     $result = mysqli_query($connection ,$sql);

    if($result)
        {
            echo header("Location:../html/claimslog.html");
        }
    else
        {
            echo '<script type="text/javascript">alert("Fail to Loging!!")</script>';
        }
}

?>