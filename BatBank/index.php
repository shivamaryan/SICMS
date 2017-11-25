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
    </div> <!-- end of header -->
<div id="toptabmenu">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="branches.php">Index Card</a></li>
        <li><a href="help.php">Help & FAQ</a></li>
        <li><a href="">Downloads</a>
            <ul>
                <li><a href="downloads/New_Account.pdf">University Exams</a></li>
                <li><a href="downloads/ChequeBook_Request.pdf">Attendance Shortage</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Placement Queries</a></li>
    </ul>
    
</div>
</div>
     <div id="templatemo_main">
         <div id="content-slider" class="b">
    	<div id="slider" style="float:left">
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
            
            <img src="images/1.png"/>
            
            </li>

            <li id="second" class="secondanimation">
            
            <img src="images/2.png"/>
            
            </li>
            
            <li id="third" class="thirdanimation">
           
            <img src="images/3.png"/>
            
            </li>
                        
            <li id="fourth" class="fourthanimation">
            <img src="images/4.png"/>
            </li>
                        
            <li id="fifth" class="fifthanimation">
            <img src="images/5.png"/>
            </li>
            </ul>
            </div>
            </div>
             <div class="ex"><div class="heading">ANNOUNCEMENTS</div><br/><div class="low">
                         <ul style="list-style-type:none;">
                         <li class="one">Last date of form filling for<br>S1 students is 10/10/2018<br/><br/></li>
                         <li class="two">Dates are nearing for S5 to <br> finish updations.<br/><br></li>
                         <li class="three">All the best for coming<br/>  University exams<br/><br/></li>
                         <li class="four">Strive towards a ragging<br/> free CUSAT campus<br/><br/></li>
                         </ul>
                          
                 
</div></div>
     </div>
    <hr/><br/>
         <div class="home">
             <div class="begin"> <h2><a href="Register.php">Register For SICMS (First Time Student User only)</a></h2> <br/>
                With the advent of digitization , it is high time that we move on from paper-work even in academic sectors. SICMS aims to provide a digital platform for details of each student of each branch. Academic details are also stored and updated on a regular basis. These details have a large use case such as in placements, result analysis,strength and weakness analysis etc. 
                    With a system with bare requirements and a good internet connection the student can edit and update the details without the hassle of long queues. Faculties, also on the other hand can keep track of progress easily. 
                </div><br/><br/>
            <!--  <span id="feat" ><b><u>Features</u></b></span><br/><br/>
             <ul style="padding-left:2em;list-style-image:url('images/next_blue.png');align:middle;"><li><span class="subhead">Account Details</span><br/><br/>View your bank account details, account balance, download statements and more. Also view your Demat, 
                     Loan & Credit Card Account Details too all in one place.</li><br/>
                 <li><span class="subhead">Fund Transfer</span><br/><br/>Transfer fund to your own accounts,Other Gotham Bank accounts seamlessly.</li><br/>
                 <li><span class="subhead">Request Services</span><br/><br/>Give a request for Cheque book,Demand Draft,Stop Cheque Payment,Debit Card Loyalty Point Redemption etc.</li><br/>
                 <li><span class="subhead">Investment Services</span><br/><br/>View your complete Portfolio with the bank, Create Fixed Deposit, Apply for IPO </li><br/>
                 <li><span class="subhead">Value Added Services</span><br/><br/>Pay Utility bills for more than 160 billers, Recharge Mobile, Create Virtual Cards, Pay any Visa Credit Card bills,
Register for estatement and sms banking</li></ul><br/>
<div class="begin">Register now for Gotham Bank's internet banking service to get started and avail for you multiple utility services, all in a matter of a click. Getting started with our internet banking is real easy. 
All you need to do is follow a few simple steps and you are good to go. <a href="Register.php">Click here</a> for our registration process
<p>We at the B.O.G.C follow best-in-class online security practices in order to safeguard your information while you are banking online. We are constantly at task for preventing fraud and thereby making all your net banking transactions completely safe.
         </div>
         </div> -->
    </div> <!-- end of main -->
    </div>
   
</body>
</html>
    