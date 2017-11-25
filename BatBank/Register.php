<?php
session_start();
error_reporting(0);
$error=$_REQUEST['error'];
include("connect.php");
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
        <li><a href="branches.php">Branches</a></li>
        <li><a href="help.php">Help & FAQ</a></li>
        <li><a href="">Downloads</a>
            <ul>
                <li><a href="downloads/New_Account.pdf">University Exams</a></li>
                 
                  <li><a href="downloads/ChequeBook_Request.pdf">Attendance Shortage</a></li>
            </ul>
        </li> 
        <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    
</div>
</div>
        <?php
         if($error==1)
            { ?> <div class="mainbox" style="width:550px;"><h1 style="font-size: 30px;">Data Missing or Invalid</h1><br/>
                  <ul style="color:#0FF; font-family:'The Girl Next Door',cursive; font-size: 20px; line-height: 20px; padding-left: 3em;">
                      <?php if($_REQUEST['fnameset']==1)
                            {
                                echo"<li>First Name cannot start with space or left blank</li>";
                            }
                            if($_REQUEST['lnameset']==1)
                            {
                                echo"<li>Last Name cannot start with space or left blank</li>";
                            }
                            if($_REQUEST['emailset']==1)
                            {
                                echo"<li>IFSC CODE should be valid, It needs to be verified</li>";
                            }
                            if($_REQUEST['pwdset']==1)
                            {
                                echo"<li>Password cannot be left blank or contain special character</li>";
                            }
                            if($_REQUEST['unameset']==1)
                            {
                                echo"<li>Login ID cannot contain blank or special character</li>";
                            } ?>
                       </ul></div> <?php }
        if($error==2)
                echo"<div class=\"mainbox\" style=\"width:450px;\"><h1 style=\"font-size: 30px;\">Password Mismatch</h1></div>";
        if($error==3)
                echo"<div class=\"mainbox\" style=\"width:450px;\"><h1 style=\"font-size: 30px;\">Login Id / Account No. Already Exist</h1></div>";
       if($error==4)
                echo"<div class=\"mainbox\" style=\"width:450px;\"><h1 style=\"font-size: 30px;\">Cannot verify this Email-Id</h1></div>";
        ?>
        
        <?php if($_REQUEST['success']==1) { ?> <div class="logmainbox" style="width: 480px;"><h1>Registered Successfully</h1></div> <?php } ?>
                    
        
    <div class="logmainbox" style="width: 480px;">
        <form method="POST" action="student_signup.php">
            <h1>Sign Up Form</h1>
            <div class="inset">
                <table>
                    <tr>
                        <td><label for="Fname" class="Ltext">Name</label></td>
                        <td>
                            <input type="text" name="name" id="name" class="loginput"<?php if (($_REQUEST["fnameset"]==1)) echo " style=\"border:thin solid red; box-shadow:1px 1px 4px 2px #F00;\"";
                                        else echo " value=\"".$_REQUEST["Fname"]."\""; ?> >
                                       
                        </td>
                    </tr>
                        <tr>
                            <td><label class="Ltext">Username</label></td>
                            <td><input name="user" type="text" class="loginput" placeholder="Username"/> </td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Admission No</label></td>
                            <td><input name="admission_no" type="text" placeholder="admission_no" class="loginput" /></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Email</label></td>
                            <td><input name="email" type="text" placeholder="email" class="loginput" /></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Contact</label></td>
                            <td><input name="contact" type="text" placeholder="contact"  class="loginput" /></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Password</label></td>
                            <td><input name="pass" type="password" class="loginput" placeholder="Password"/></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Confirm Password</label></td>
                            <td><input name="confirm_password" type="password" class="loginput" placeholder="confirm password"/></td>
                        </tr>
                    
                </table>
            </div>
                    <input type="submit" value="Register" style="margin-bottom:25px;margin-right: 190px;" class="loginput" align="center">
        </form>
    </div>
    </div>
</body>
</html>
