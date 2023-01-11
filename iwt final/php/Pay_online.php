<?php

$name=$_POST{'name'};
$NIC=$_POST{'NIC'};
$email=$_POST{'email'};
$client_id=$_POST{'client_id'};
$policy_number=$_POST{'policy_number'};
$amount=$_POST{'amount'};

$connection=mysqli_connect('localhost','root','','life');

$sql="INSERT INTO payment(id,name,NIC,email,client_id,policy_number,amount)
      values('','{$name}','{$NIC}','{$email}','{$client_id}','{$policy_number}','{$amount}')";

$result=mysqli_query($connection,$sql);

if($result)
{
    header('Location:../HTML/Card_details.html');
}
else
{
    echo"error";
}
?>