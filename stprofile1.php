<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stprofile.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Student Profile</h1>
    <div id="div1">
	<?php
	include('dbcon.php');
	if(isset($_GET['id']))
	{
		$key_child = $_GET['id'];
		$ref_table = 'User';
		$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
		if($getdata > 0)
		{
	?>
	<form name="form1" method="post" action="code.php"  style="height:500px;">
		<table>
		<input type="hidden" name = "key" value = "<?=$key_child;?>">
        <tr> 
			<td>Full Name</td>
			<td><input type="text" name="Name" value = "<?=$getdata['Name']; ?>" ></td>
		</tr>
		<tr> 
			<td>Phone No.</td>
			<td><input type="text" name="Contact_Number" value = "<?=$getdata['Contact_Number']; ?>" ></td>
		</tr>
        <tr> 
			<td>Address</td>
			<td><input type="text" name="Address" value = "<?=$getdata['Address']; ?>" ></td>
		</tr>
		<tr> 
			<td>Birth date</td>
			<td><input type="date" name="Birthday" value = "<?=$getdata['Birthday'];?>" ></td>
		</tr>
		<tr> 
			<td>Mother's Name</td>
			<td><input type="text" name="Mother" value = "<?=$getdata['Mother']; ?>" ></td>
		</tr>
		<tr> 
			<td>Phone no. of Mother</td>
			<td><input type="text" name="Mother_number" value = "<?=$getdata['Mother_number']; ?>" ></td>
		</tr>
		<tr> 
			<td>Father's Name</td>
			<td><input type="text" name="Father" value = "<?=$getdata['Father']; ?>" ></td>
		</tr>
		<tr>
			<td>Phone no. of Father</td>
			<td><input type="text" name="Father_number" value = "<?=$getdata['Father_number']; ?>" ></td>
		</tr>
		<tr>
			<td>Contact Person</td>
			<td><input type="text" name="Contact_Person"></td>
		</tr>
		</table> 
        <center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
		<center><button type></center>
	</form>
	<?php
		}
		else
		{
			$_SESSION['status'] = "No record found.";
			header('Location: registrar1.php');
			exit();
		}
	}
	else
		{
			$_SESSION['status'] = "Not found.";
			header('Location: registrar1.php');
			exit();
		}
	?>
</div>
</body>
</html>
