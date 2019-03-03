<?php
include("connection.php");
if(isset($_POST["submit"]))
{
$email = $_POST["email"];
$pass = $_POST["pass"];

  $y="select * from login
		where email ='$email' and password='$pass'";
$qry=$connect->query($y);
if($qry==TRUE)
{
session_start();
$_SESSION["user_session"]= $email;
header("location:index.php");
}
else
{
echo "Error in Username or Password!";
}


}
elseif(isset($_POST["register"]))
{
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$q1="insert into login values('','$first','$last','$email','$pass')";
if($qry1=$connect->query($q1))
{
echo "Successfully submitted";
}
else
{ 
echo "ERROR!";
	}


}

?>
<!DOCTYPE html>
<!--[if IE 7 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->


<head>

</head>

<body>


<table align="center" cellspacing="50" width="100%">
<tr>
<td align="center" colspan="2"><font size="30%" >Welcome!</font></td>
</tr><br>


<tr>
<td valign="top">
<form  method="POST">
<table align="center" width="40%">
<tr><td>Login Here</td></tr>
<tr><td>Username:<input type="email" name="email" required></td></tr>
<tr><td>Password: <input type="password" name="pass" required></td></tr>
<tr><td><button name="submit">Login</button></td></tr>
</form>
</table>

</td>
<form  method="POST">
<td>
<table bgcolor="#f1f1f1" cellpadding="8%" align="center" width="40%">
<tr><td>name</td></tr>
<tr><td><input type="text" name="first" placeholder="first" required>
	<input type="text" name="last" placeholder="last" required></td>
</tr>
<tr>
<td>choose your username</td></tr>
<tr>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td>create a password</td>
</tr>
<tr>
<td ><input type="password" name="pass" required></td>
</tr>
<tr><td><input type="submit" value="Register" name="register"></td></tr>
</table>
</form>
</td>
</tr>
</table>
</div>
</div></section>
</body>
</html>