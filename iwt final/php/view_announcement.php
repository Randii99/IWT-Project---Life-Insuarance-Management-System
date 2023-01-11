<!DOCTYPE html>
<html> 
    <head>
        <title> Announcement </title>
        <link rel ="stylesheet" href="../CSS/Main_announcement.css">
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
        <h1 align="center"> Announcement </h1>
    <a href="add.php"><input type="button" class="btn" value="Add Announcement"></a> <br/> <br/>
    <table class="center" width='80%' border='1'>
        <tr>
            
       
        <th> title</th>
        <th> publish_date</th>
        <th> description</th>
        
</tr>
<?php
include_once("config.php");


$sql ="SELECT *from announcement";
$result = mysqli_query($conn,$sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['publish_date']."</td>";
        echo "<td>".$row['description']."</td>";
        
        echo "</tr>";

    }
}
?>
</table>
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
</body>
</html>