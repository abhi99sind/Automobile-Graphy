<?php
session_start();
if(isset($_SESSION["admin_ses"]))
{
$r="welcome";
}
else
{
header("location:index.php");}?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body bgcolor="#CEEOF1">
<?php include("header.php");?>
<table class="adjust">
<tr class="left"><td><?php include("left.php"); ?></td>
<td rowspan="9" > Please choose option from left.</td></tr>
</table>
</body>
</html>