<?php
    error_reporting(E_ALL);
ini_set("display_errors", 1);
    if(isset($_POST['submit']))
    {
        include('connect.php');
        $email     = $_POST['email'];
        $user     = $_POST['user'];
        $pass     = $_POST['pass'];
        $admn     =$_POST['admission_no'];
        $first_name    = $_POST['first_name'];
        $last_name=$_POST['last_name'];
        $contact = $_POST['contact'];
        $identify=1;

        function validate_password($pass) 
        {
            $uppercase = '/[A-Z]/';
            $lowercase = '/[a-z]/';
            $special_chars = '/[!@#$%^&*()\-_=+{};:,<.>]/';
            $numerics = '/[0-9]/';

            // Check if it has uppercase letters.
            if (preg_match_all($uppercase, $pass, $matches) < 1) return false;


            // Check if it has lowercase letters.
            if(preg_match_all($lowercase, $pass, $matches) < 1) return false;

            // Check if it has special characters.
           if(preg_match_all($special_chars, $pass, $matches) < 1) return false;

            // Check if it has numeric characters.
           if(preg_match_all($numerics, $pass, $matches) < 1) return false;

            // Check if it has atleast 8 characters.
            if(strlen($pass) < 8) return false;

            return true;
        }
        
        $sqlinsert ="INSERT INTO student_login 
        (userid,first_name,last_name,password,admission_no,email,contact,identify)
        VALUES ('$user','$first_name','$last_name','$pass','$admn','$email','$contact','$identify')"; 


        if (!empty($user))
        {
             if (preg_match("/[^A-Za-z]/", $user)) 
             {
                $signupinfo="Invalid username. Username should be alpha";
             }
        }
         else 
        {
            $signupinfo="Username should not be empty!";
        }
        if (!empty($_POST["pass"]))
        {
            $status = validate_password($_POST["pass"]);
            if (!$status)
                {
                    $signupinfo="Invalid password. Password should include atleast one upppercase, one lowercase, one numeric, one special character and alteast 8 characters";
                }
            else
            {
                 if (!empty($_POST["confirm_password"]))
                {
                    
                    if ($_POST["pass"] != $_POST['confirm_password'])
                    $signupinfo="Passwords are not matching";
                    else
                    {
                        if(!mysqli_query($con,$sqlinsert))
                        $signupinfo="error inserting new record";
                            
                        $newrecord='Your account has been successfully created';    
                    }
                   
                } 
                else 
                {
                    $signupinfo="<p>Confirm Password should not be empty!";
                }
            }
        }
        else 
        {
            $signupinfo="Password should not be empty!";           
        }

    }


?>
<!DOCTYPE html>
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
               <?php if(isset($signupinfo))
    {  echo"<div class='logmainbox' style='width:450px;'><h1>$signupinfo</h1></div>"; } ?>       
        
    <div class="logmainbox" style="width: 480px;">
        <form method="POST" action="Register.php">
            <h1>Sign Up Form</h1>
            <div class="inset">
                <table>
                    <<tr>
                        <td><label for="Fname" class="Ltext">Firstname</label></td>
                        <td>
                            <input type="text" name="first_name" class="loginput" placeholder="Firstname" />
                                       
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Fname" class="Ltext">Lastname</label></td>
                        <td>
                            <input type="text" name="last_name" class="loginput" placeholder="Lastname" />
                                       
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
                    <input type="submit" name="submit"value="Register" style="margin-bottom:25px;margin-right: 190px;" class="loginput" align="center">
        </form>

    </div>
    </div>
 <?php if(isset($newrecord))
    {  echo"<div class='logmainbox' style='width:450px;'><h1>$newrecord</h1></div>"; } ?> 

</body>
</html>
