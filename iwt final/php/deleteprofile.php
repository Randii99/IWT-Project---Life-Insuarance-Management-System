<?php

$connection=mysqli_connect('localhost','root','','life');

$email=$_GET['email'];
$password=$_GET['password'];


 
$query = "DELETE  
          FROM register
          WHERE email='$email' && password='$password'";

$result = mysqli_query($connection,$query);

if ($result==$query)
{
    echo "Record deleted";
    header('location:../html/claimreg.html');
}
else
{
    echo "not Deleted";
    header('location:../html/profiledelete.html');
}

?>




