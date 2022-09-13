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
	
	<form name="form1" method="post" action="edit.php">
		<table>
        <tr> 
				<td>Full Name</td>
				<td><input type="text" name="fullname" placeholder="Last Name, First Name Middle Name" required></td>
			</tr>
			<tr> 
				<td>Phone No.</td>
				<td><input type="tel" name="phone" pattern="^(09|\+639)\d{9}$" required></td>
			</tr>
            <tr> 
				<td>Address</td>
				<td><input type="text" name="address" required ></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"required></td>
			</tr>
			<tr> 
				<td>Birth date</td>
				<td><input type="date" name="date"></td>
			</tr>
            <tr> 
				<td>Birth place</td>
				<td><input type="text" name="birthplace"></td>
			</tr>
			<tr> 
				<td>Contact</td>
				<td><input type="text" name="contact"required></td>
			</tr>
			<tr> 
				<td>Contact Information</td>
			</tr>
			<tr> 
				<td>Mother's Name</td>
				<td><input type="text" name="mother"></td>
			</tr>
			<tr> 
				<td>Phone no. of Parents</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr> 
				<td>Phone no. of Parents</td>
				<td><input type="text" name="mother"></td>
			</tr>
		</table>
        <center><input type="submit" name="update" id="update" value="Update"></center>
	</form>
</div>
</body>
</html>
