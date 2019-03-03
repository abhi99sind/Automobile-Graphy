<?php
$print=" ";
if(isset($_POST["submit"]))
{
$name=$_POST["username"];
$pass=$_POST["pass"];
include("connection.php");
$q="select * from admin where adminid='$name' and password='$pass'";
$qry=$con->query($q);
if($qry==TRUE)
{
session_start();
$_SESSION["admin_ses"]=$name;
header("location:home.php");
}
else
{
 $print="Incorrect Username or Password";
}
}?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Pannel</title>
</head>
<body>
<br>
<br>
<form method="POST">
<table align="center">
<tr><td>Username</td><td><input type="text" name="username" required></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" required></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
<?php echo $print; ?>
</body>
</html> 