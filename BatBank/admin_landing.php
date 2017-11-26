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
                <li><a href="downloads/New_Account.pdf">University Exams</a></li>
                <li><a href="downloads/ChequeBook_Request.pdf">Attendance Shortage</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Placement Queries</a></li>
    </ul>

    <div class="logmainbox" style="width: 480px;">
        <form method="POST" action="student_signup.php">
            <h1>Extra Details Filling Page</h1>
            <div class="inset">
                <table> 
                        <tr>
                          <td><label class="Ltext">Admission No</label></td>
                          <td><input type="text" name="admno" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Co-Curricular Activities</label></td>
                        </tr>
                        <tr>
                            <td class="Ltext">Activity 1 </td>
                            <td><input type="text" name="cocur1" class="loginput"></td>
                        </tr>
                        <tr>
                            <td class="Ltext">Activity 2 </td>
                            <td><input type="text" name="cocur2" class="loginput"></td>
                        </tr>

                        <tr>
                            <td class="Ltext">Activity 3</td>
                            <td><input type="text" name="cocur3" class="loginput"></td>
                        </tr>


                        <tr>
                          <td><label class="Ltext">GPA</label></td>
                          <td><input type="text" name="gpa" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Gate Score</label></td>
                          <td><input type="text" name="gatescr" class="loginput"></td>
                        </tr>

                    

                    
                        <tr>
                            <td><h2 class="Ltext">Mini Project</p></td>

                        </tr>
                        
                        <tr>
                          <td><label class="Ltext">Name</label></td>
                          <td><input type="text" name="miname" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Project Guide</label></td>
                          <td><input type="text" name="minguid" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Remarks</label></td>
                          <td><input type="text" name="minrem" class="loginput"></td>
                        </tr>

                         <tr>
                            <td><h2 class="Ltext">Major Project</p></td>

                        </tr>

                        <tr>
                          <td><label class="Ltext">Name</label></td>
                          <td><input type="text" name="majname" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Project Guide</label></td>
                          <td><input type="text" name="majguid" class="loginput"></td>
                        </tr>

                        <tr>
                          <td><label class="Ltext">Remarks</label></td>
                          <td><input type="text" name="majrem" class="loginput"></td>
                        </tr>


                    </table>
            </div>
                    <input type="submit" value="Update Extra Details" style="margin-bottom:25px;margin-right: 160px;" class="loginput" align="center">
        </form>
    </div>
    </div>
    
</div>
</div>
</body>
</html>