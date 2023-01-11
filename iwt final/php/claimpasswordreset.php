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

 $query = mysqli_query($conn, "SELECT * FROM register WHERE email='$email'");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){

        $query = "UPDATE register SET password='$_POST[password]' where email='$email'";
        $query_run = mysqli_query($conn,$query);
        
        if($query)
        {
            header("Location:../html/claimslog.html");
        }
        else
        {
            echo '<script type="text/javascript">alert("Data did not update!!")</script>';
        }
 }
 else
 {
    echo '<script type="text/javascript">alert("E-mail is Not Found!!")</script>';
 

 }
 mysqli_close($conn);
 }
}
?>