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
			<select name="courses[]" id="courses">
				<option> -- Courses --</option>
				<option value = "BSEDENG">BSED-ENG</option>
				<option value = "BSCS">BSCS</option>
				<option value = "ABREED">ABREED</option>
				<option value = "BSEDSCI">BSED-SCI</option>
				<option value = "BSEDMATH">BSED MATH</option>
				<option value = "BEED">BEED</option>
				<option value = "BSBA">BSBA</option>
				<option value = "BSOA">BSOA</option>
			</select>
		<label for="yearlevel">Year Level:</label>
			<select name="yearlevel[]" id="yearlevel">
				<option> -- Year Level --</option>
				<option value="first">First Year</option>
				<option value="second">Second Year</option>
				<option value="third">Third Year</option>
				<option value="fourth">Fourth Year</option>
			</select>
		<label for="sem">Semester:</label>
			<select name="semester[]" id="semester">
			<option> -- Semester --</option>
				<option value="onesem">1st Semester</option>
				<option value="twosem">2nd Semester</option>
			</select>		   
<center>
	<table>
			<tr> 
			<th>Course Code</th>
			<th>Discriptive Title</th>
			<th>Unit</th>
			<th>Pre-Requisite</th>
		</tr>
			<?php
			include('dbcon.php');
			
											$ref_table = "Course&Curriculum/Bachelor of Arts in Religion/First Year/1st Sem";
											$fetchdata = $database->getReference($ref_table)->getValue();
											if($fetchdata > 0 )
											{
												$i = 0;
												foreach($fetchdata as $key => $row)
												{
													?>
													<tr>
														<td><?=$row['Course_Code']; ?></td>
														<td><?=$row['Desc_title']; ?></td>
														<td><?=$row['Unit']; ?></td>
														<td><?=$row['Pre-Req']; ?></td>
													</tr>
													<?php
												}
											}
											else
											{
												?>
												<td colspan = "4"> No Record found </td> 
												<?php
											}
											?>
		</table> 
</center>
	</form>
</fieldset>

</div>	

<center><button type="submit" name="update_registrar" id="update" value="Update"> Update </center>

</body>
</html>
