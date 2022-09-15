<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Curriculum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="curriculum.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="nav">
            <p><a href="logout.php?" style="float: left; margin-left: 50px; color: white;">Logout</a></p>	
            <center><p class="title">Pre-Enrollment and Grade Evaluation</p></center>
        </div>
        <div id="id01" class="modal">    
        <form class="modal-content animate"  action="#" method="POST">                   
            <h1>Student Profile</h1>
    <div id="div1">
	
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
</div>
            </form>
        </div>
    </body>
</html>