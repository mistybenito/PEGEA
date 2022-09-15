<?php
include_once("dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

 <body>
    <div class="nav">
        <p style="color: #ffffff; text-align: center; font-weight: bold;" >Pre-Enrollment and Grade Evaluation</p>
    </div>
    <div class="div1">
        <img src="images/logo.png" id="logo">
    </div>
        <div class="div2">
            <h1>Select user...</h1>    
         
        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">   
        <ul>
            <li>
                 <p>Registrar</p>
                    <img src="images/registrar.png" alt="registrar" class="user">                
            </li>
            <li>    
                 <p>MIS</p>
                    <img src="images/mis.png" alt="mis" class="user">    
            </li>
           
         </ul>
        </a>
        </div>
        <div id="id01" class="modal">    

            <form class="modal-content animate"  action="logincode.php" method="POST">          
             
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               
                <img src="images/admin.png" alt="Admin" class="avatar">
               
               <h3>Hello Admin! Welcome!</h3>
               </div>
          
              <div class="container">
               <div>
                   <label>Username:</label>
                   <input type="text" name="email" required>
               </div>
               <div>
                   <lable>Password:</label>
                   <input type="text" name="password" required>
               </div>
               <input type="checkbox"id="rememberMe"><label for="rememberMe">Remember me <a href="#" class="forgot">Forgot password?</a></label>   
               
               <center>
                <div style="padding: 10px;">
                    <input type="submit" name = "login_button" class="button">
                </div>
               </center>
             </div>
            </form>
        </div>
         
   </body>
</html>
