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
     <div class="logmainbox" style="width: 480px;">
        <form method="POST" action="student_signup.php">
            <h1>Index Card Information</h1>
            <div class="inset">
                <table>
                    <tr>
                        <td><label for="Fname" class="Ltext">Admission No</label></td>
                        <td>
                            <input type="text" name="admission_no" id="admission_no" class="loginput"<?php if (($_REQUEST["fnameset"]==1)) echo " style=\"border:thin solid red; box-shadow:1px 1px 4px 2px #F00;\"";
                                        else echo " value=\"".$_REQUEST["Fname"]."\""; ?> >
                                       
                        </td>
                    </tr>
                        <tr>
                            <td><label class="Ltext">Register No</label></td>
                            <td><input name="register" type="text" class="loginput" placeholder="register"/> </td>
                        </tr>
                        
                        <tr>
                            <td><label class="Ltext">Cat Rank</label></td>
                            <td><input name="cat_rank" type="text" placeholder="email" class="loginput" /></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">First Name</label></td>
                            <td><input name="first_name" type="text" placeholder="contact"  class="loginput" /></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Last Name</label></td>
                            <td><input name="last_name" type="text" placeholder="admission_no" class="loginput" /></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Email Id</label></td>
                            <td><input name="email" type="text" placeholder="admission_no" class="loginput" /></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Year of Admission</label></td>
                            <td><input name="year_of_admission" type="text" placeholder="admission_no" class="loginput" /></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Branch</label></td>
                          <td><input type="text" name="branch" class="loginput"></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Date of Birth</label></td>
                          <td><input type="text" name="dob" class="loginput"></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Age</label></td>
                          <td><input type="text" name="age" class="loginput"></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Sex</label></td>
                          <td><input type="text" name="sex" class="loginput"></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Contact Number</label></td>
                          <td><input type="text" name="contact_no" class="loginput"></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Blood Group</label></td>
                          <td><input type="text" name="blood_group" class="loginput"></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Religion</label></td>
                          <td><input type="text" name="religion" class="loginput"></td>
                        </tr>
                        <tr>
                          <td><label class="Ltext">Caste</label></td>
                          <td><input type="text" name="caste" class="loginput"></td>
                        </tr>
                   </table>


                   <table>
                        <tr>
                            <td><h2 class="Ltext">Father's Details</p></td>

                        </tr>
                        
                        <tr>
                          <td><label class="Ltext">First Name</label></td>
                          <td><input type="text" name="f_fname" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Last Name</label></td>
                          <td><input type="text" name="f_lname" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Occupation</label></td>
                          <td><input type="text" name="f_occ" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Contact</label></td>
                          <td><input type="text" name="f_contact" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Email Id</label></td>
                          <td><input type="text" name="f_email" class="loginput"></td>
                        </tr>

                    </table>

                     <table>
                        <tr>
                            <td><h2 class="Ltext">Mother's Details</p></td>

                        </tr>
                        
                        <tr>
                          <td><label class="Ltext">First Name</label></td>
                          <td><input type="text" name="m_fname" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Last Name</label></td>
                          <td><input type="text" name="m_lname" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Occupation</label></td>
                          <td><input type="text" name="m_occ" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Contact</label></td>
                          <td><input type="text" name="m_contact" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Email Id</label></td>
                          <td><input type="text" name="m_email" class="loginput"></td>
                        </tr>

                    </table>

                    <table>
                        <tr>
                            <td><h2 class="Ltext">Course I Details</p></td>

                        </tr>
                        
                        <tr>
                          <td><label class="Ltext">Course</label></td>
                          <td><input type="text" name="course" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Board</label></td>
                          <td><input type="text" name="board" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Percentage or GPA</label></td>
                          <td><input type="text" name="percentage_cgpa" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Year of Passing</label></td>
                          <td><input type="text" name="year_of_passing" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Registration No</label></td>
                          <td><input type="text" name="regn_no" class="loginput"></td>
                        </tr>

                    </table>

                    <table>
                        <tr>
                            <td><h2 class="Ltext">Course II Details</p></td>

                        </tr>
                        
                        <tr>
                          <td><label class="Ltext">Course</label></td>
                          <td><input type="text" name="course2" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Board</label></td>
                          <td><input type="text" name="board2" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Percentage or GPA</label></td>
                          <td><input type="text" name="percentage_cgpa2" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Year of Passing</label></td>
                          <td><input type="text" name="year_of_passing2" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Registration No</label></td>
                          <td><input type="text" name="regn_no2" class="loginput"></td>
                        </tr>

                    </table>

                    <table>
                        <tr>
                            <td><h2 class="Ltext">Permanent Address</p></td>

                        </tr>
                        
                        <tr>
                          <td><label class="Ltext">Street</label></td>
                          <td><input type="text" name="paddress" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">City</label></td>
                          <td><input type="text" name="paddress_city" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">State</label></td>
                          <td><input type="text" name="paddress_state" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Pin Code</label></td>
                          <td><input type="text" name="pa_zip" class="loginput"></td>
                        </tr>

                    </table>

                     <table>
                        <tr>
                            <td><h2 class="Ltext">Local Address</p></td>

                        </tr>
                        
                        <tr>
                          <td><label class="Ltext">Street</label></td>
                          <td><input type="text" name="laddress" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">City</label></td>
                          <td><input type="text" name="laddress_city" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">State</label></td>
                          <td><input type="text" name="laddress_state" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Pin Code</label></td>
                          <td><input type="text" name="la_zip" class="loginput"></td>
                        </tr>

                    </table>




                     <!--   <tr>
                            <td><label class="Ltext">Password</label></td>
                            <td><input name="pass" type="password" class="loginput" placeholder="Password"/></td>
                        </tr>
                        <tr>
                            <td><label class="Ltext">Confirm Password</label></td>
                            <td><input name="confirm_password" type="password" class="loginput" placeholder="confirm password"/></td>
                        </tr>
                    
                </table> -->
            </div>
                    <input type="submit" value="Register" style="margin-bottom:25px;margin-right: 190px;" class="loginput" align="center">
        </form>
    </div>
    </div>
</body>
</html>

