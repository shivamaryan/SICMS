<?php
session_start();
error_reporting(0);
include("dbconnection.php");
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
    <img id="contain" src="images/soe.jpg">
    <!--<div><img src="images/soe.jpg" id="batimg1"><img src="images/batman1.png" id="batimg2"></div> -->
    <div id="bodycontent">

<div id="templatemo_wrapper">

    <div class="mainbox">
        <img src="images/soe.jpg" width="100" height="100" style="float:left; margin:2em 2em;">
        <div id="site_title">
        
            <h1 style="margin-top: 30px;"><a href="index.php" style="color:yellow; text-decoration: none; margin-left: 1em;">Student Index Card Management<span></span></a></h1>
            <p style="float:right; margin-right: 2.2em; color: buttonface; font-family: Satisfy,cursive; font-size: 2.5em;">School of Engineering CUSAT</p>
            
        </div> <!-- end of site_title -->
    </div>

<div id="toptabmenu">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="branches.php">Branches</a></li>
        <li><a href="help.php">Help & FAQ</a></li>
        <li><a href="">Downloads</a>
            <ul>
                <li><a href="downloads/New_Account.pdf">New Account form</a></li>
                 <li><a href="">Loan Forms</a>
                    <ul>
                        <li><a href="downloads/home_loan_application_form.pdf">Home Loan</a></li>
                        <li><a href="downloads/Car_Loan_Application_Form.pdf">Car Loan</a></li>
                        <li><a href="downloads/Education_Loan_Application_Form.pdf">Educational Loan</a></li>
                    </ul>
                 </li>
                <li><a href="downloads/ChequeBook_Request.pdf">Cheque book request</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    
</div>
</div>
     <div id="templatemo_main"><span class="main_top"></span> 
         <div id="rightpanel"> <span class="rightpaneltext"> Head Office : 

<p>THE BANK OF GOTHAM CITY <br/>
STAR HOUSE<br/> 
C - 5, "G" Block,<br/> 
Batman Complex, <br/>
Kolkata.<br/>
West Bengal. India</br>
Ph: 022-66684444 <br/>
Email: bankgotham@gmail.com
</P>
<p>
For all your enquiries :
Call at Tele No - (022) – 40919191 / 1800 220 229 (all days)
24 X 7</p></span></div> 
 <div id="leftpanel"><img src="images/note.png" width="220" height="200"/>
        <span class="leftpaneltext">Contact us...</span></div>
         <div id="rightpanel"></div>
    </div> 
    </div>
    <?php include'footer.php' ?>
    </body>
</html>
