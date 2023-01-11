<?php
$error='';
if(isset($_POST['update'])){
 if(empty($_POST['contact_no'])){
 $error = "contact_no Not Found!!";
 }
 else
 {

 $contact_no=$_POST['contact_no'];
 $password=$_POST['password'];

 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "life");

 $query = mysqli_query($conn, "SELECT * FROM reg WHERE contact_no='$contact_no'");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){

        $query = "UPDATE reg SET password='$_POST[password]' where contact_no='$contact_no'";
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