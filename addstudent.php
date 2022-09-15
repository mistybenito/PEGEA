<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stprofile.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Student Profile</h1>
    <div id="div1">
	<form name="form1" method="post" action="code.php">
		<table>
		<input type="hidden" name = "key" value = "<?=$key_child;?>">
        <tr> 
				<td>Full Name</td>
				<td><input type="text" name="Name" ></td>
			</tr>
			<tr> 
				<td>Phone No.</td>
				<td><input type="text" name="Contact_Number"" ></td>
			</tr>
            <tr> 
				<td>Address</td>
				<td><input type="text" name="Address" ></td>
			</tr>
			<tr> 
				<td>Birth date</td>
				<td><input type="text" name="Birthday"></td>
			</tr>
			<tr> 
				<td>Mother's Name</td>
				<td><input type="text" name="Mother"></td>
			</tr>
			<tr> 
				<td>Phone no. of Mother</td>
				<td><input type="text" name="Mother_number"></td>
			</tr>
			<tr> 
				<td>Father's Name</td>
				<td><input type="text" name="Father"></td>
			</tr>
			<tr>
				<td>Phone no. of Father</td>
				<td><input type="text" name="Father_number" ></td>
			</tr>
		</table> 
        <center><button type="submit" name="add_registrar" id="update" value="Update"> Update </center>
	</form>
</div>
</body>
</html>
