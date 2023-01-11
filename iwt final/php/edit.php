<?php

include_once("config.php");

if(isset($_POST['update'])){
    $id= $_POST['id'];
    $admin_id= $_POST['admin_id'];
    $title= $_POST['title'];
    $user_type= $_POST['user_type'];
    $publish_date= $_POST['publish_date'];
    $description= $_POST['description'];
    $result= mysqli_query($conn, "UPDATE announcement SET id='$id',admin_id='$admin_id',title='$title',user_type='$user_type',publish_date='$publish_date',description='$description' WHERE id=$id");

    header("Location: index.php");

}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * from announcement  WHERE id=$id");
while($row = mysqli_fetch_array($result)){
    $admin_id =$row['admin_id'];
    $title =$row['title'];
    $user_type =$row['user_type'];
    $publish_date =$row['publish_date'];
    $description  =$row['description'];
}
?>
<html>
    <head>
        <title> Edit Announcement</title>
        <link rel ="stylesheet" href="../CSS/Announcement_edit.css">
</head>
<body>
     <!--header-->
	<nav> 
        <div class="logo"> 
           <a href="#" ><img src="../Images/logo.PNG" height="=100px"  width="100px" >
           </a>
           ,<a href="#" ><p class="lic"> LIFE CARE <br> INSURANCE</p></a>
         
        </div>
       
        <ul> 
            <li> <a class="links2" href="#"> <img src="../Images/reg.png.png" width="45px" height="40px" alt="registr page"> </a> </li>
            <li> <a class="links" href="#"> Contact Us </a> </li>
            <li> <a class="links" href="#"> Pay Online </a> </li>
            <li> <a class="links" href="#">Categories </a> </li>
            <li>  <a class="links" href="#">About Us </a> </li>
        </ul>
    </nav>

    <a href="view_announcement.php"> <input type="submit"  value="view announcement" ></a>  <br/> <br/>
    <br/><br/>

    <form action="edit.php" method="POST" class="form">
        <table border="0">
        <tr>
        <div class="input-group">
                <div class="input-box">
                <td><label class="label">admin_id</label></td>
                <td><input type="text" name="admin_id"class="name" value=<?php echo $admin_id;?>></td>  
                </div>
            </div> 
            </tr>

            <tr>
            <div class="input-group">
                <div class="input-box">
                <td><label class="label">title</label></td>
                <td><input type="text" name="title" class="name" value=<?php echo $title;?>></td>
                </div>
           </div>   
            </tr> 

            <tr>
            <div class="input-group">
                <div class="input-box">
                <td><label class="label2">user_type</label>
                <select name="user_type" id="user_type" class="name3" value=<?php echo $user_type;?>>
                        <option value="Customer">Customer</option>
                        <option value="Admin">Admin</option>
                    </select>
                  </td>
                  </div>
               </div> 
            </tr>  

            <tr>
            <div class="input-group">
                <div class="input-box">
                <td><label class="label">publish_date</label></td>
                <td><input type="date" name="publish_date" name="name" value=<?php echo $publish_date;?>></td>  
                </div>
             </div> 
            </tr> 

            <tr>
            <div class="input-group">
                <div class="input-box">
                <td><label class="label">description</label></td>
                <td><input type="text" name="description" name="name1" value=<?php echo $description;?>></td> 
                </div>
              </div>  
            </tr> 

            <tr>
                <td><input type="hidden" name="id" value =<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="update"></td> 
</tr>
</table>
</form>
 <!--footer-->

 <div class="footer">
            <a href="#" ><h2 class="cu" >  Contact Us   </h2> </a>
            <img class="location" src="../Images/location.jpg" height="30px" width="30px"> 
            <h3 class="h3location">  Life care insurance, <br>No 132,<br> station rd,colombo 04. </h3>
            <img class="email" src="../Images/mail.png" height="30px" width="30px">
            <h3 class="h3email" > lifecareinsurance@gmail.com </h3>
            <img class="phone " src="../Images/call.png"  height="30px" width="30px">
            <h3 class="h3phone" >011588777 </h3>
            <a href="#"><img class="footerlogo" src="../Images/flogo.PNG" height="210px" width="210px " alt="flogo"> </a>

            <a   href="#"><h2 class="fu"> Find Us</h2></a>
            <a   href="www.facebook.com"><img class="fb" src="../Images/fb.png" height="30px" width="30px" > </a>
            <a  href="www.instagram.com"><img class="tt" src="../Images/tt.png" height="30px" width="30px"> </a>
            <a  href="www.twitter.com"><img class="insta" src="../Images/insta.png" height="30px" width="30px"> </a>
            <h2 class="copy"> Copywrite All Right Recieved @ </h2>
        </div>
</body>
</html>


