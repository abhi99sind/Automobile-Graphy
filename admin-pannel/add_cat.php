<?php
$print=" ";
session_start();
if(isset($_SESSION["admin_ses"]))
{
	if(isset($_POST["submit"]))
	{
		$catname=$_POST["catname"];
		$proname=$_POST["proname"];
		$style = $_POST["body-style"];
		$engine=$_POST["engine"];
		$drivetrain=$_POST["drivetrain"];
		$transmission=$_POST["transmission"];
		$exterior=$_POST["exterior"];
		$interior=$_POST["interior"];
		$miles=$_POST["miles"];
		$doors=$_POST["doors"];
		$passengers=$_POST["passengers"];
		$varient=$_POST["stock"];
		$driven=$_POST["vin"];
		$mileage=$_POST["mileage"];
		$fuel_type=$_POST["fuel_type"];
		$condition=$_POST["condition"];
		$owners=$_POST["owners"];
		$warranty=$_POST["warranty"];
		$price=$_POST["price"];
		$image1=$_FILES["imagea"]["name"];
		$image2=$_FILES["imageb"]["name"];
		$image3=$_FILES["imagec"]["name"];
		$image4=$_FILES["imaged"]["name"];
		$image5=$_FILES["imagee"]["name"];
		$video=$_POST["video"];
		include("connection.php");
		move_uploaded_file($_FILES["imagea"]["tmp_name"],'img/'.$image1);
		move_uploaded_file($_FILES["imageb"]["tmp_name"],'img/'.$image2);
		move_uploaded_file($_FILES["imagec"]["tmp_name"],'img/'.$image3);
		move_uploaded_file($_FILES["imaged"]["tmp_name"],'img/'.$image4);
		move_uploaded_file($_FILES["imagee"]["tmp_name"],'img/'.$image5);
		$q1="insert into showroom values('','$proname','$catname','$style','$engine','$drivetrain','$transmission','$exterior','$interior','$miles','$doors','$passengers','$varient','$driven','$mileage','$fuel_type','$condition','$owners','$warranty','$price','$image1','$image2','$image3','$image4','$image5','$video')";
		$qry1=$con->query($q1);
		if($qry1==TRUE)
		{
			$print="Records Inserted Successfully";
		}
		else
		{
			$print="Error";
		}
	}
}
else
{
	header("location:index.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body bgcolor="#CEEOF1">
	<?php include("header.php");?>
	<table class="adjust">
		<tr class="left">
			<td valign="top"><?php include("left.php"); ?></td>
			<td rowspan="9" >
			<form method="POST" enctype="multipart/form-data">
				<table>
				<tr><td>Category Name:</td><td><input type="text" name="catname" required></td></tr>
				<tr><td> Name:</td><td><input type="text" name="proname">	</td></tr>
				<tr><td>BODY STYLE:</td><td><select name="body-style" required>
												<option value="hatchback">Hatchback</option>
												<option value="sedan">Sedan</option>
												<option value="suv">SUV</option>
												<option value="muv">MUV</option>
												<option value="luxury">Luxury</option>
												</select></td></tr>
				<tr><td>ENGINE:</td><td><input type="text" name="engine" required></td></tr>
				<tr><td>TRANSMISSION:</td><td><select name="transmission" required>
												<option value="Automatic">Automatic</option>
												<option value="5-speed manual">5-speed manual</option>
												<option value="6-speed manual">6-speed manual</option>
												</select>
				</td></tr>
				<tr><td>DRIVETRAIN:</td><td><input type="text" name="drivetrain" required></td></tr>
				<tr><td>EXTERIOR:</td><td><input type="text" name="exterior" required></td></tr>
				<tr><td>INTERIOR:</td><td><input type="text" name="interior" required></td></tr>
				<tr><td>Year:</td><td><input type="text" name="miles" required></td></tr>
				<tr><td>DOORS:</td><td><input type="text" name="doors" required></td></tr>
				<tr><td>PASSENGERS:</td><td><input type="text" name="passengers" required></td></tr>
				<tr><td>Varient:</td><td><input type="text" name="stock" required></td></tr>
				<tr><td>driven:</td><td><input type="text" name="vin" required></td></tr>
				<tr><td>FUEL MILEAGE:</td><td><input type="text" name="mileage" required></td></tr>
				<tr><td>FUEL TYPE:</td><td><input type="text" name="fuel_type" required></td></tr>
				<tr><td>CONDITION:</td><td><input type="text" name="condition" required></td></tr>
				<tr><td>OWNERS:</td><td><input type="text" name="owners" required></td></tr>
				<tr><td>WARRANTY:</td><td><input type="text" name="warranty" required></td></tr>
				<tr><td>Price</td><td><input type="number" name="price" required></td></tr>
				<tr><td>Image1</td><td><input type="file" name="imagea" required></td></tr>
				<tr><td>Image2</td><td><input type="file" name="imageb" required></td></tr>
				<tr><td>Image3</td><td><input type="file" name="imagec" required></td></tr>
				<tr><td>Image4</td><td><input type="file" name="imaged" required></td></tr>
				<tr><td>Image5</td><td><input type="file" name="imagee" required></td></tr>
				<tr><td>Video link id:</td><td><input type="text" name="video" required></td></tr>
				<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
				</table>
			</form> </td></tr>
			</table> 
		<p><?php echo $print;?></p>
</body>
</html>