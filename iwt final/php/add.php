<html>
    <head>
        <title> Add Announcement</title>
        <link rel ="stylesheet" href="../CSS/Add_announcement.css">
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

    <a href ="view_announcement.php" ><input type="submit"  value="view announcement" class="view" ></a>  <br/> <br/>
    
    <form action ="add.php" method ="POST" class="form">
        <table width="25%" border ="0">
            <tr>
            <div class="input-group">
                <div class="input-box">
                <td><label class="label">admin_id</label></td>
                <td><input type="text" name="admin_id" class="name"></td> 
</div>
</div> 
            </tr>

            <tr>
            <div class="input-group">
                <div class="input-box">
                <td><label class="label">title</label></td>
                <td><input type="text" name="title" class="name"></td> 
</div>
</div> 
            </tr> 

            <tr>
            <div class="input-group">
                <div class="input-box">
            
               <td> <label class="label2">user_type</label>
                   <select name="user_type" id="user_type" class="name3">
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
                <td><input type="date" name="publish_date"class="name"></td>  
</div>
</div>
            </tr> 

            <tr>
            <div class="input-group">
                <div class="input-box">
                <td><label class="label">description</label></td>
                <td><input type="text" name="description" class="name1"></td>  
</div>
</div>
            </tr> 
             <td><input type="submit"class="save" name="submit" value="Add"></td>

</table>
</form>


<?php
if(isset($_POST['submit'])){
    $admin_id= $_POST['admin_id'];
    $title= $_POST['title'];
    $user_type= $_POST['user_type'];
    $publish_date= $_POST['publish_date'];
    $description= $_POST['description'];

    include_once("config.php");
    $result = mysqli_query($conn,"INSERT INTO announcement(id,admin_id,title,user_type,publish_date,description) VALUES ('','$admin_id','$title', '$user_type','$publish_date', '$description') ");

   

}
?>

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