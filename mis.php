<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
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
.imgStudent, .imgCurri
{
    width: 70px;
    height: 70px;
    margin-top: 25px;
    padding: 25px;
}
.btnStudent, .btnCurriculum
{
    font-size: 18px;
    background-color: #e6edff;
    color: #214198;
    padding-top: 28px;
    margin: 25px;
    border: none;
    cursor: pointer;
    width: 270px;
    border-radius: 20px;
    letter-spacing: 4px;
    box-shadow: 0 23px 30px 0 rgb(0 0 0 / 31%), 0 22px 55px 0 rgb(0 0 0 / 26%);

}
button:hover 
{
    opacity: 0.7;
    
}
div.btns
{
   margin-top: 35px;
}
.logo
{
    width: 200px;
    height: 170px;
}
.cccLogo
{
    margin-top: 25px;
}
</style>
</head>
<body>
    <div class="nav">
        <p style="color: #ffffff; text-align: center; font-weight: bold;" >Pre-Enrollment and Grade Evaluation</p>
    </div>
    <center><div class="cccLogo"><img src="images/logo.png" class="logo"></div></center>

      <center>
       <div class="btns"> 
        <button class="btnStudent">Student List<center><img src="images/students.png" class="imgStudent"></center></button>
        <button class="btnCurriculum">Curriculum<center><img src="images/curriculum.png" class="imgCurri"></center></button>
       </div> 
      </center>    
    <nav class="sidenav" style="width:25%;">
        
    </nav>
</body>
</html>