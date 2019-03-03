<?php
session_start();
if(isset($_SESSION["admin_ses"]))
{
include("connection.php");
$q2="select * from showroom";
$qry2=$con->query($q2);
echo "<table border='1' style='overflow-x:auto;'>";
echo "<tr><th> Id</th><th>Name</th><th>category_name</th><th>style</th><th>engine</th><th>drivetrain</th><th>transmission</th><th>Exterior</th><th>interior</th><th>miles</th><th>doors</th><th>passengers</th><th>Varient</th><th>driven</th><th>mileage</th><th>Fuel_type</th><th>Condition</th><th>Owners</th><th>Warranty</th><th>Price</th>";
while($r=$qry2->fetch_array())
{
echo "<tr>";
echo "<td>$r[0]</td>";
echo "<td>$r[1]</td>";
echo "<td>$r[2]</td>";
echo "<td>$r[3]</td>";
echo "<td>$r[4]</td>";
echo "<td>$r[5]</td>";
echo "<td>$r[6]</td>";
echo "<td>$r[7]</td>";
echo "<td>$r[8]</td>";
echo "<td>$r[9]</td>";
echo "<td>$r[10]</td>";
echo "<td>$r[11]</td>";
echo "<td>$r[12]</td>";
echo "<td>$r[13]</td>";
echo "<td>$r[14]</td>";
echo "<td>$r[15]</td>";
echo "<td>$r[16]</td>";
echo "<td>$r[17]</td>";
echo "<td>$r[18]</td>";
echo "<td>$r[19]</td>";

echo "<td><a href='del_cat.php?id=$r[0]'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";
}
else
{
header("location:index.php");
}?>
