<?php

$card_type=$_POST{'card_type'};
$card_number=$_POST{'card_number'};
$amount=$_POST{'amount'};

$connection=mysqli_connect('localhost','root','','life');

$sql="INSERT INTO card_details(id,card_type,card_number,amount)
      values('','{$card_type}','{$card_number}','{$amount}')";

$result=mysqli_query($connection,$sql);

if($result)
{
    header('Location:../HTML/Payment_success.html');
}
else
{
    echo"error";
}
?>