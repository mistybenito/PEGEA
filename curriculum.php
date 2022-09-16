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
<h1>Edit Curriculum</h1>
    <div id="div1">
	
	<form name="form1" method="post" action="code.php"  style="height:500px;">
	
<fieldset>
	<legend>Curriculum</legend>
		<label for="courses">Course:</label>
			<select name="courses" id="courses">
				<option>ABREED</option>
				<option>BSED-SCI</option>
				<option>BSED MATH</option>
				<option>BSED-ENG</option>
				<option>BEED</option>
				<option>BSCS</option>
				<option>BSBA</option>
				<option>BSOA</option>
			</select>
		<label for="year-level">Year Level:</label>
			<select name="year-level" id="year-level">
				<option value="1">First Year</option>
				<option value="2">Second Year</option>
				<option value="3">Third Year</option>
				<option value="4">Fourth Year</option>
			</select>
		<label for="sem">Semester:</label>
			<select name="semester" id="semester">
				<option value="1">1st Semester</option>
				<option value="2">2nd Semester</option>
			</select>		   
<center>
	<table>
		
		<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Pre-Requisite</th>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		<tr>
			<td><input type="text" name="course-code" class ="code" value = "" ></td>
			<td><input type="text" name="title"  class="title" value = "" ></td>
			<td><input type="text" name="unit" class="unit" value = "" ></td>
			<td><input type="text" name="pre-req" class="pre-req" value = "" ></td>
		</tr>
		
		</table> 
</center>
	</form>
</fieldset>

</div>

<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>
</body>
</html>
