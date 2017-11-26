<?php
session_start();
error_reporting(0);
include("connect.php");
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
if (isset($_SESSION['employeeid']))
{
    header("Location:employeeacount.php");
}
?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SICMS</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/favicon.ico" rel="shortcut icon">
</head>
<body>
     <img id="contain" src="images/soe1.jpg"> 
    <!--<div><img src="images/soe.jpg" id="batimg1"><img src="images/batman1.png" id="batimg2"></div> -->
    <div id="bodycontent">

<div id="templatemo_wrapper">

    <div class="mainbox">
        <img src="images/soe.jpg" width="100" height="100" style="float:left; margin:2em 2em;">
        <div id="site_title">
        
            <h1 style="margin-top: 30px;"><a href="index.php" style="color:yellow; text-decoration: none; margin-left: 1em;">Student Index Card Management<span></span></a></h1>
            <p style="float:right; margin-right: 2.2em; color: buttonface; font-family: Satisfy,cursive; font-size: 2.5em;">School of Engineering CUSAT</p>
            
        </div> <!-- end of site_title -->
    </div> <!-- end of header -->
<div id="toptabmenu">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="branches.php">Index Card</a></li>
        <li><a href="help.php">Help & FAQ</a></li>
        <li><a href="">Downloads</a>
            <ul>
                <li><a href="downloads/reval.pdf">Revaluation Form</a></li>
                <li><a href="downloads/provisional.pdf">Provisional Form</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Placement Queries</a></li>
    </ul>
    
</div>
</div>
     <div id="templatemo_main"><span class="main_top"></span> 
     <span class="helpheading">FREQUENTLY ASKED QUESTIONS..</span>
         <div id="faq">
             
                 <p class="q">1.&nbsp;&nbsp;&nbsp;&nbsp;How should I use this portal?</p>
<p>Ans::If you are a first time user, register from the homepage, else fill in the details on Index Card.</td>

<p class="q">2.&nbsp;&nbsp;&nbsp;&nbsp;What else can a student do?</p>
<p>Ans::Students have to also update the Academic details for every semester, by just logging in, which lands on the results page. </p>
<p class="q">3.&nbsp;&nbsp;&nbsp;&nbsp;What role does the admin play, and who is he/she?</p>
<p>Ans::The admin alone has the right to update some of the details, such as, GPA, Project details, etc</p>
<p class="q">4.&nbsp;&nbsp;&nbsp;&nbsp;I see a Placement Queries at the top right. What do you mean by that and who can use that?</p>
<p>Ans::It can be used to simplfy the initial round screening process in Placement season. Anybody can access the details, based on GPA criteria, backlogs, etc</p>

 </div>
    </div> <!-- end of main -->
    </div>

</body>
</html>
