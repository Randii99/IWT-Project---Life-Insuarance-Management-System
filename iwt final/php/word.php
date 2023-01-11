<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "upload"); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

if (isset($name)) {

$path= '../life';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo header('location:../html/thankyou.html');

}
}
}
?>
