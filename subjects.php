<?php
    include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Subjects</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="subjects.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Adding Subject</h1>
    <div id="div1">
	
	<form name="form1" method="post" action="code.php"  style="height:400px;">
	
<fieldset>
	<legend>Subject Description</legend>
		
	<table>
		
		<tr> 
			<td>Course Code</td>
			<td><input type="text" name="course-code" value = " " ></td>
		</tr>
		<tr> 
			<td>Descriptive Title</td>
			<td><input type="text" name="title" value = " " ></td>
		</tr>
        <tr> 
			<td>Unit</td>
			<td><input type="text" name="unit" value = "" ></td>
		</tr>
		<tr> 
			<td>Pre-Requisite</td>
			<td><input type="text" name="pre-req" value = ""></td>
		</tr>
		</table> 
	</form>
</fieldset>

<center><button type="submit" name="update_registrar" id="update" value="Update"> Add Subject </center></div>
</body>
</html>
