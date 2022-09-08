<?php
include_once("config.php");
    session_start();

    
    if($mysqli===false)
    {
        echo "error";
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username = $_POST["username"];
		$password = $_POST["password"];

        $sql = "select * from users where username = '".$username."' AND password = '".$password."'";
		$result = mysqli_query($mysqli, $sql);
        
        $row = mysqli_fetch_array($result);

        if($row['usertype'] == 'registrar') 
        {
            $_SESSION['username'] = $row['id'];
            header('location: reg.php');
        }
        elseif($row['usertype'] == 'mis') 
        {
            $_SESSION['username'] = $row['id'];
            header('location: mis.php');
        }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
           
@font-face
{
    font-family: 'Nunito-VariableFont_wght';
    src: url('fonts/Nunito-VariableFont_wght.ttf');
}
body
{
    font-family: 'Nunito-VariableFont_wght';
    background-image:url("images/bground.png");
    background-attachment: fixed; 
	background-position: center; 
	background-size: cover;
    margin: 0;
	padding: 0;
}
#logo
{
    height: 350px;
    width: 400px;
}
div.div1
{
    float: left;
    width: 450px;
    padding-left: 10%;
}
div.div2
{   
    margin-top: 10%;
}
.container
{
    padding: 25px;
    width: 35%;
    margin-left: 50%;
    overflow: hidden;
    border-radius: 25px;
    background-color: white;
    box-shadow: 0 12px 16px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
}
.nav
{
    text-align: center;
    margin: 0;
    padding: 10px;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text], input[type=password] 
{
    width: 80%;
    padding: 12px 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 20px;
}
.button
{
    background-color: #214198;
    color: white;
    padding: 12px 0px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
    border-radius: 20px;
    letter-spacing: 6px;
}
.button:hover 
{
    opacity: 0.8;
}
.forgot
{
    margin-left: 50%;
    text-decoration: none;
    color: #e03434;
}
.imgcontainer 
{
    position: relative;
    text-align: center;
}
img.avatar 
{
    width: 13%;
    border-radius: 50%;
}

 
        </style>
    </head>

 <body>
    <div class="nav">
        <p style="color: #ffffff; text-align: center; font-weight: bold;" >Pre-Enrollment and Grade Evaluation</p>
    </div>
    <div class="div1">
        <img src="images/logo.png" id="logo">
    </div>
    <div class="div2">
        
        <form class="container"  action="#" method="POST">
            <div class="imgcontainer">                        
             <img src="images/admin.png" alt="Admin" class="avatar">
                <h3>Hello Admin! Welcome!</h3>
            </div>
        <div class="login-form">
            <label>Username:</label>
            <input type="text" name="username" required>
            </br>
            <label>Password:</label>
            <input type="password" name="password" required>
            <br>
            <input type="checkbox"id="rememberMe"><label for="rememberMe">Remember me <a href="#" class="forgot">Forgot password?</a></label>
            <div style="padding: 10px; text-align: center;">
                    <input type="submit" value="Login" class="button">
                </div>   
    </div>
        </form>
        
    </div>
        
         
   </body>
</html>
