<?php
    include_once("config.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="reg.css" rel="stylesheet" type="text/css">
    </head>

 <body>
    <div class="nav">
	    <p ><a href="logout.php?" class="logout">Logout</a></p>	
        <center><p class="title">Pre-Enrollment and Grade Evaluation</p></center>
    </div>
    <center>
    <div class="div1">
        <img src="images/logo.png" id="logo">
    </div>
    </center>
<center>
        <div class="div2">
           
        <ul>
            <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
            <li>
                 <p>Student</p>
                    <img src="images/students.png" alt="student" class="user">                
            </li>
         </a>
            <li>    
                 <p>Curriculum</p>
                    <img src="images/curriculum.png" alt="curriculum" class="user">    
            </li>
         </ul>
       
        </div>
</center>
    <div id="id01" class="modal">    
        <form class="modal-content animate"  action="#" method="POST">                   
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               
                <img src="images/students.png" alt="Students" class="avatar">
     <center>
    <div class="div3">  
        <input type="text" placeholder="Search..">
    </div>           
<table class="student-list-content"  id="btn01" >
    <tr>
        <th>Student #</th>
	    <th>Name</th>
	    <th>Year Level</th>
	    <th>Course</th>
	    <th>Files</th>
    </tr>
    <tr>
        <td>2019-1974</td>
        <td>Benito, Misty Lisa S.</td>
        <td>4th Year</td>
        <td>BSCS</td>
        <td><a href>View</a></td>
    </tr>
</table>
              
                
               </center>
             </div>
            </form>
        </div>
         
   </body>
</html>
