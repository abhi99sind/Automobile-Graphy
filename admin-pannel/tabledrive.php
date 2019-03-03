<?php
session_start();
if(isset($_SESSION["admin_ses"]))
{
include("connection.php");
$q2="select * from schedule_drive";
$qry2=$con->query($q2);
echo "<table border='1' style='overflow-x:auto;'>";
echo "<tr><th> Id</th><th>Name</th><th>Contact Preference</th><th>Email</th><th>Phone</th><th>Best-Day</th><th>Best-Time</th>";
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


echo "</tr>";
}
echo "</table>";
}
else
{
header("location:index.php");
}?>
