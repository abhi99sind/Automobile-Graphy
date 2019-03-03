<?php
if(isset($_POST['Submit']))
{
 require_once("connection.php");

$yourName = $_POST['name'];
$yourEmail = $_POST['email'];
$yourPhone = $_POST['msg'];

 
$sql="INSERT INTO contact_form VALUES ('','$yourName','$yourEmail', '$yourPhone')";
 
 
if(!$result = $connect->query($sql)){
die('There was an error running the query [' . $connect->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>



