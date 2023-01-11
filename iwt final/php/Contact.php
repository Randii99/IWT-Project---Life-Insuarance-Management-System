<?php

$name=$_POST{'name'};
$email=$_POST{'email'};
$subject=$_POST{'subject'};
$message=$_POST{'message'};

$connection=mysqli_connect('localhost','root','','life');

$sql="INSERT INTO contact_us(id,name,email,subject,message)
      values('','{$name}','{$email}','{$subject}','{$message}')";

$result=mysqli_query($connection,$sql);

if($result)
{
    header('Location:../HTML/Contact_thanks.html');
}
else
{
    echo"error";
}
?>