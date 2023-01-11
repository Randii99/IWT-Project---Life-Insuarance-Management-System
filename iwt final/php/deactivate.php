<?php
$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['email'])){
 $error = "Email Not Found!!";
 }
 else
 {

 $email=$_POST['email'];
 $password=$_POST['password'];

 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "life");

 $query = mysqli_query($conn, "SELECT * FROM sreg WHERE email='$email'");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){

        $query = "DELETE from sreg where email='$email'";
        $query_run = mysqli_query($conn,$query);
        
        if($query)
        {
           echo header("success");
        }
        else
        {
            echo("error") ;
        }
 }
 else
 {
    echo("error");
 

 }
 mysqli_close($conn);
 }
}
?>