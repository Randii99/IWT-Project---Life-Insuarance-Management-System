<?php
$error='';
if(isset($_POST['update'])){
 if(empty($_POST['email'])){
 $error = "email Not Found!!";
 }
 else
 {

 $email=$_POST['email'];
 $contact_no=$_POST['contact_no'];

 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "life");

 $query = mysqli_query($conn, "SELECT * FROM reg WHERE email='$email'");
 
 $rows = mysqli_num_rows($query);

 if($rows ==1){

        $query = "UPDATE reg SET contact_no='$_POST[contact_no]' where email='$email'";
        $query_run = mysqli_query($conn,$query);
        
        if($query)
        {
           echo header("location:../html/profile.html");
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