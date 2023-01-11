<?php

   
   
   $email= $_POST['email'];
   $password=$_POST['password'];

   $conn=mysqli_connect('localhost','root','','life');

   $query=mysqli_query($conn,"select * from  register where email= '$email' && password= '$password' ");

   if (mysqli_num_rows($query)==false  )

   {
      
      header('location:../html/home.html');

   }
   else
   {
      echo 'login not successsful';
   }



?>