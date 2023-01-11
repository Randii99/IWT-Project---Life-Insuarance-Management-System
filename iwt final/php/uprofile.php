<?php
$conn = mysqli_connect('localhost','root','','life');
$set = $_POST['verify'];
if($set){

    $show = "SELECT * FROM reg where email='$email'";
    $result = mysqli_query ($conn,$show);
    while($row = mysqli_fetch_array(result))
    {
        
        echo $row['first_name'];
        echo $row['last_name'];
        echo $row['phone number'];
        echo $row['email'];
        echo $row['id number'];
        echo $row[''];
        echo "<br/>";
    }
}
else
{
    echo "error"
}
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
		header('location:../html/change password.html');
	}
  } else {
	header('location: .');
  }
?>
