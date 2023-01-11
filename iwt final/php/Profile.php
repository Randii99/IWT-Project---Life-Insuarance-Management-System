<?php
  require_once 'Config.php';
  session_start();
  $email=$_SESSION['email'];

  if (isset($_SESSION['email'])) {

    $sql = 'SELECT * FROM sreg WHERE email = :email';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
	$row = $stmt->fetch();
	if(isset($_POST['submit']))
	{
		header('location:../html/Change_password.html');
	}
  } else {
	header('location: .');
  }
?>








<!DOCTYPE html>
<html> 
    <head>
       <title>  Life Care Insurance  </title>
       <link rel ="stylesheet" href="../css/Profile.css">
       
</head> 
    <body>
     
        <header>
	<nav> 
        <div class="logo"> 
           <a href="#" ><img src="../images/logo.png" height="=100px"  width="100px" >
           </a>
           <a href="#" ><p class="lic"> LIFE CARE <br> INSURANCE</p></a>
         
        </div>
       
        <ul> 
            <li> <a class="links2" href="#"> <img src="../images/reg.png.png" width="45px" height="40px" alt="registr page"> </a> </li>
            <li> <a class="links" href="#"> Contact Us </a> </li>
            <li> <a class="links" href="#"> Pay Online </a> </li>
            <li> <a class="links" href="#">Categories </a> </li>
            <li>  <a class="links" href="#">About Us </a> </li>
        </ul>
    </nav>
    </header>


    

   
    <form method="POST" action="../php/S_login.php" class="User-profile">
          <!--<h1 style="color: black;" class="ha1"> <center>Account Details</center></h1><br>-->
			<center><h2><label style="color: black; margin-top: 50px;">Wellcome</label></h2></center>
			
			<center>
			<div class="txtb">
				<label class="txtb" for="name"><b>Name with initials :</b><br><?= $row['name'] ?></label>
			</div>
	
			<div class="txtb">
				<label class="txtb" for="id"><b>ID number : </b><br><?= $row['id_num'] ?></label>
			</div>
			
			<div class="txtb">
				<label class="txtb" for="dob"><b>Date of birth : </b><br><?= $row['dob'] ?></label>
			</div>

			<div class="txtb">
				<label class="txtb" for="address"><b> Address : </b><br><?= $row['address'] ?></label>
			</div>
            <div class="txtb">
				<label class="txtb" for="mail"><b> Email : </b><br><?= $row['email'] ?></label>
			</div>
			<div class="txtb">
				<label class="txtb" class="txtb" for="pno"><b>Phone number :</b><br><?= $row['telephone'] ?></label>
			</div>
			</center>
			<center><input type="button" class="logbtn" value="Edit" name="submit" onclick="page1()"><br>
			<input type="button" class="logbtn" value="Back" name="back" onclick="page2()"></center>
		  </form>




<footer >

    <div class="footer">
        <a href="#" ><h2 class="cu" >  Contact Us   </h2> </a>
        <img class="location" src="../images/location.jpg" height="30px" width="30px"> 
        <h3 class="h3location">  Life care insurance, <br>No 132,<br> station rd,colombo 04. </h3>
        <img class="email" src="../images/mail.png" height="30px" width="30px">
        <h3 class="h3email" > lifecareinsurance@gmail.com </h3>
        <img class="phone " src="../images/call.png"  height="30px" width="30px">
        <h3 class="h3phone" >011588777 </h3>
        <a href="#"><img class="footerlogo" src="../images/flogo.png" height="210px" width="210px " alt="flogo"> </a>

        <a   href="#"><h2 class="fu"> Find Us</h2></a>
        <a   href="www.facebook.com"><img class="fb" src="../images/fb.png" height="30px" width="30px" > </a>
        <a  href="www.instagram.com"><img class="tt" src="../images/insta.png" height="30px" width="30px"> </a>
        <a  href="www.twitter.com"><img class="insta" src="../images/tt.png" height="30px" width="30px"> </a>
        <h2 class="copy"> Copywrite All Right Recieved @ </h2>
    </div>
    </footer>
   

</body>
</html> 