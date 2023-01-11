<DOCTYPE html>
    <head>
        <title> Add data </titlt>
</head>

<body>

<?php
 include_once( "config.php");

 if(isset($_POST["Submit"])){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $password = $_POST['password'];

    if(empty($first_name) || empty($last_name) || empty($username) || empty($email) ||empty($contact_no) || empty($password)){
        
        if(empty($first_name)){
            echo "<font color = 'red'> First name field is empty.</font><br/>";
        }

        if(empty($last_name)){
            echo "<font color = 'red'> Last name field is empty.</font><br/>";
        }

        if(empty($username)){
            echo "<font color = 'red'> Username field is empty.</font><br/>";
        }

        if(empty($email)){
            echo "<font color = 'red'> Email field is empty.</font><br/>";
        }

        if(empty($contact_no)){
            echo "<font color = 'red'> Contact number field is empty.</font><br/>";
        }

        if(empty($password)){
            echo "<font color = 'red'> Password field is empty.</font><br/>";
        }

    }else{
        //if all the fields ate filled
        $result = mysqli_query($mysqli, "INSERT INTO reg(first_name,last_name,username,email,contact_no,password) VALUES('$first_name','$last_name','$username','$email','$contact_no','$password')");

        //display success message
        echo "<font color='green'> Data added successfully.";
        echo "<br/><a href='index.php'> View result</a>";
    }


 }

?>

</body>
</html>

