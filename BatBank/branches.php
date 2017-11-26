<?php

  if(isset($_POST['submit']))
  {
    include('connect.php');
    $admn     = $_POST['admission_no'];
    $cat      = $_POST['cat_rank'];
    $fname    = $_POST['first_name'];
    $lname    = $_POST['last_name']; 
    $yoa      = $_POST['year_of_admission'];
    $branch   = $_POST['branch'];
    $dob      = $_POST['dob'];
    $age      = $_POST['age'];
    $sex      = $_POST['sex'];
    $email    = $_POST['email']; 
    $contact  = $_POST['contact_no'];
    $blood    = $_POST['blood_group'];
    $religion = $_POST['religion'];
    $caste    = $_POST['caste'];
    
    
    $sqlinsert1 ="INSERT INTO basic_details 
    (admission_no,cat_rank,first_name,last_name,year_of_admission,branch,dob,age,sex,email,contact_no,blood_group,religion,caste)
    VALUES ('$admn','$cat','$fname','$lname','$yoa','$branch','$dob','$age','$sex','$email','$contact','$blood',   '$religion','$caste')";
    
    $res1=mysqli_query($con,$sqlinsert1);
    /*if(!mysqli_query($con,$sqlinsert1))
    $errorinfo="invalid input in first section";
    else
    $insertinfo="first section is correct";*/   
    

  
    $f_fname   = $_POST['f_fname'];
    $f_lname   = $_POST['f_lname'];
    $f_contact =$_POST['f_contact'];
    $f_occ     =$_POST['f_occ'];
    $f_email   =$_POST['f_email'];
    $m_fname   =$_POST['m_fname'];
    $m_lname   = $_POST['m_lname'];
    $m_contact =$_POST['m_contact'];
    $m_occ     =$_POST['m_occ'];
    $m_email   =$_POST['m_email'];
    $sqlinsert2="INSERT INTO family_details
    (admission_no,f_fname,f_lname,f_occ,f_contact,f_email,m_fname,m_lname,m_occ,m_contact,m_email)
    VALUES ('$admn','$f_fname','$f_lname','$f_occ','$f_contact','$f_email','$m_fname','$m_lname','$m_occ','$m_contact','$m_email')";
    
     $res2=mysqli_query($con,$sqlinsert2);
   /* if(!mysqli_query($con,$sqlinsert2))
    {$errorinfo="error inserting new record 2";}
    else
      $insertinfo="family details is correct";*/

    $course    =$_POST['course'];
    $board     =$_POST['board'];
    $ptg_cgpa  =$_POST['percentage_cgpa'];
    $yop       =$_POST['year_of_passing'];
    $regn      =$_POST['regn_no'];
    $course2   =$_POST['course2'];
    $board2    =$_POST['board2'];
    $ptg_cgpa2 =$_POST['percentage_cgpa2'];
    $yop2      =$_POST['year_of_passing2'];
    $regn2     =$_POST['regn_no2'];
    $sqlinsert3 ="INSERT INTO past_record(admission_no,course,board,percentage_cgpa,year_of_passing,regn)
    VALUES ('$admn','$course','$board','$ptg_cgpa','$yop','$regn')";
    
     $res3=mysqli_query($con,$sqlinsert3);
    /*if(!mysqli_query($con,$sqlinsert3))
    {die('error inserting new record 3');}
    else
      echo'class 10 record inserted ';*/

    $sqlinsert4 ="INSERT INTO past_record(admission_no,course,board,percentage_cgpa,year_of_passing,regn)
    VALUES ('$admn','$course2','$board2','$ptg_cgpa2','$yop2','$regn2')";
     $res4=mysqli_query($con,$sqlinsert4);
    /*if(!mysqli_query($con,$sqlinsert4))
    {die('error inserting new record 4');}
    else
      echo' class 12 record inserted ';*/
    
  
    $paddress       =$_POST['paddress'];
    $paddress_city  =$_POST['paddress_city'];
    $paddress_state =$_POST['paddress_state'];
    $pa_zip         =$_POST['pa_zip'];
    $laddress       =$_POST['laddress'];
    $laddress_city  =$_POST['laddress_city'];
    $laddress_state =$_POST['laddress_state'];
    $la_zip         =$_POST['la_zip'];

    $sqlinsert5 ="INSERT INTO address(admission_no,paddress,paddress_city,paddress_state,pa_zip,laddress,laddress_city,laddress_state,la_zip)
    VALUES ('$admn','$paddress','$paddress_city','$paddress_state','$pa_zip','$laddress','$laddress_city','$laddress_state','$la_zip')";
    
     $res5=mysqli_query($con,$sqlinsert5);
    /*if(!mysqli_query($con,$sqlinsert5))
    {die('error inserting new record4');}
    else 
      echo 'address details inserted ';*/
    
    if($res1&&$res2&&$res3&&$res4&&$res5)
    {
      $insertinfo='your data set been recorded';
    }
    else
      $errorinfo='please enter your data again';


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
          
              <?php 
                    if(isset($insertinfo))
                     {  echo"<div class='logmainbox' style='width:450px;'><h1>$insertinfo</h1></div>"; }
                    else
                     {  echo"<div class='logmainbox' style='width:450px;'><h1>$errorinfo</h1></div>"; } 
              ?>       
     <div class="logmainbox" style="width: 480px;">
      <form method="POST" action="academic.php">
            <h1>Index Card Information</h1>
            <div class="inset">
                <table>
                    <tr>
                        <td><label class="Ltext">Admission No</label></td>
                        <td>
                            <input type="text" name="admission_no" id="admission_no" class="loginput"<?php /*if (($_REQUEST["fnameset"]==1)) echo " style=\"border:thin solid red; box-shadow:1px 1px 4px 2px #F00;\"";
                                        else echo " value=\"".$_REQUEST["Fname"]."\""; */?> >
                                       
                        </td>
                    </tr>
                       <!-- <tr>
                            <td><label class="Ltext">Register No</label></td>
                            <td><input name="register" type="text" class="loginput" placeholder="register"/> </td>
                        </tr>-->
                        
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
                          <td><label class="Ltext">DOB(DD/MM/YYYY)</label></td>
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
                          <td><label class="Ltext">Contact Number </label></td>
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

                    <input type="submit" value="Proceed towards filling Academic Details" style="margin-bottom:25px;margin-right:100px;" class="loginput" align="center">

        </form>
    </div>
    </div>
</body>
</html>

