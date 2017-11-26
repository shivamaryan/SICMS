
<?php
	if(isset($_POST['submit']))
	{
		include('connect.php');
		$admn     = $_POST['admission_no'];
		$regn  = $_POST['regn_no'];
		$sem   = $_POST['sem'];
		$year_of_exam  =$_POST['yoe'];

		$subcode =$_POST['subcode'];
		$internal   =$_POST['internal'];
		$external   =$_POST['external'];
		$total=$internal+$external;
		$grade=$_POST['grade'];
		$credit=$_POST['credit'];
		$gpa=$_POST['gpa'];
		$sqlinsert="INSERT INTO semgpa(admission_no,sem,gpa)
		VALUES('$admn','$sem','$gpa')";
		if(!mysqli_query($con,$sqlinsert))
		die('cannot insert gpa');
		else echo'gpa inserted';

		
		//gradegpa($mark,$internal);
		//echo $sqlinsert;
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode','$internal','$external','$total','$year_of_exam','$credit','$grade')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record 1');

		$subcode2 =$_POST['subcode2'];
		$internal2  =$_POST['internal2'];
		$external2   =$_POST['external2'];
		$total2=$internal2+$external2;
		$grade2=$_POST['grade2'];
		$credit2=$_POST['credit2'];
		$year_of_exam2  =$_POST['yoe2'];

		//gradegpa($mark2,$internal2);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode2','$internal2','$external2','$total2','$year_of_exam2','$credit2','$grade2')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record2');

		$subcode3 =$_POST['subcode3'];
		$internal3   =$_POST['internal3'];
		$external3   =$_POST['external3'];
		$total3=$internal3+$external3;
		$grade3=$_POST['grade3'];
		$credit3=$_POST['credit3'];
		$year_of_exam3  =$_POST['yoe3'];

		//gradegpa($mark3,$internal3);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode3','$internal3','$external3','$total3','$year_of_exam3','$credit3','$grade3')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record3');

		$subcode4 =$_POST['subcode4'];
		$internal4   =$_POST['internal4'];
		$external4   =$_POST['external4'];
		$total4=$internal4+$external4;
		$grade4=$_POST['grade4'];
		$credit4=$_POST['credit4'];
		$year_of_exam4  =$_POST['yoe4'];

		//gradegpa($mark4,$internal4);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode4','$internal4','$external4','$total4','$year_of_exam4','$credit4','$grade4')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record4');

		$subcode5 =$_POST['subcode5'];
		$internal5   =$_POST['internal5'];
		$external5   =$_POST['external5'];
		$total5=$internal5+$external5;
		$grade5=$_POST['grade5'];
		$credit5=$_POST['credit5'];
		$year_of_exam5  =$_POST['yoe5'];

		//gradegpa($mark5,$internal5);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode5','$internal5','$external5','$total5','$year_of_exam5','$credit5','$grade5')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record5');

		$subcode6 =$_POST['subcode6'];
		$internal6   =$_POST['internal6'];
		$external6   =$_POST['external6'];
		$total6=$internal6+$external6;
		$grade6=$_POST['grade6'];
		$credit6=$_POST['credit6'];
		$year_of_exam6  =$_POST['yoe6'];

		//gradegpa($mark6,$internal6);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode6','$internal6','$external6','$total6','$year_of_exam6','$credit6','$grade6')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record6');

		$subcode7 =$_POST['subcode7'];
		$internal7   =$_POST['internal7'];
		$external7   =$_POST['external7'];
		$total7=$internal7+$external7;
		$grade7=$_POST['grade7'];
		$credit7=$_POST['credit7'];
		$year_of_exam7  =$_POST['yoe7'];

		//gradegpa($mark7,$internal7);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode7','$internal7','$external7','$total7','$year_of_exam7','$credit7','$grade7')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record7');

		$subcode8 =$_POST['subcode8'];
		$internal8   =$_POST['internal8'];
		$external8   =$_POST['external8'];
		$total8=$internal8+$external8;
		$grade8=$_POST['grade8'];
		$credit8=$_POST['credit8'];
		$year_of_exam8  =$_POST['yoe8'];

		//gradegpa($mark8,$internal8);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode8','$internal8','$external8','$total8','$year_of_exam8','$credit8','$grade8')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record8');
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
    
    <div class="logmainbox" style="width: 1025px;">
         <h1>Result Filling </h1>
          <div class="inset">
         	<table>
					 <form method="POST" action="completeresult.php">
					 	<fieldset>
					 	<tr>
							<td><label class="Ltext" >Admission number</label></td>
							<td><input name="admission_no" type="text" class="loginput"  placeholder="admission number"/></td>
						</tr>

						<tr>
							<td><label class="Ltext">Registation Number</label></td>
							<td><input name="regn_no" class="loginput"  type="text" /></td>
						</tr>
							
						<tr>
							<td><label class="Ltext">Semester</label></td>
							<td><input name="sem" class="loginput"  type="text" /></td>
						</tr>

						<tr>
							<td><label class="Ltext">GPA</label></td>
							<td><input name="gpa" class="loginput" type="text" /></td>
						</tr>

						<tr>
							<td><label class="Ltext">Attendance</label></td>
							<td><input name="atten" class="loginput" type="text" /></td>
						</tr>
						
						
						<table>	
							<tr>
								<td><label class="Ltext">Sub Code</label></td>
								<td><label class="Ltext">Internal</label></td>
								<td><label class="Ltext">External</label></td>
								<td><label class="Ltext">Credit</label></td>
								<td><label class="Ltext">Grade</label></td>
								<td><label class="Ltext">Year of Exam</label></td>
							</tr>
							<tr>
								<td>
									<input name="subcode" class="loginput" type="text" />
								</td>
								<td>
									<input name="internal" class="loginput" type="text" />
								</td>
								<td>
									<input name="external" class="loginput" type="text" />
								</td>
								<td>
									<input name="credit" class="loginput" type="text" />
								</td>
								<td>
									<input name="grade" class="loginput" type="text" />
								</td>
								<td>
									<input name="yoe" class="loginput" type="text" />
								</td>
							</tr>
						
						
							<tr>
							<td>
								<input name="subcode2" class="loginput" type="text" />
								</td>
								<td>
								<input name="internal2" class="loginput" type="text" />
								</td>
								<td>
								<input name="external2" class="loginput" type="text" />
								</td>
								<td>
								<input name="credit2" class="loginput" type="text" />
								</td>

								<td>
								<input name="grade2" class="loginput" type="text" />
								</td>
								<td>
								<input name="yoe2" class="loginput" type="text" />
								</td>
							</tr>

						<tr>
							<td>
							<input name="subcode3" class="loginput" type="text" />
							</td>
							<td>
							<input name="internal3" class="loginput" type="text"/>
							</td>
							<td>
							<input name="external3" class="loginput" type="text" />
						</td>
							<td>
							<input name="credit3" class="loginput" type="text" />
						</td>
							<td>
							<input name="grade3" class="loginput" type="text" />
						</td>
						<td>
							<input name="yoe3" class="loginput" type="text" />
							</td>
					</tr>

						<tr>
							<td>
							<input name="subcode4" class="loginput" type="text" />
							</td>
							<td>
							<input name="internal4" class="loginput" type="text" />
							</td>
							<td>
							<input name="external4" class="loginput" type="text" />
						</td>
							<td>
							<input name="credit4" class="loginput" type="text" />
						</td>
							<td>
							<input name="grade4" class="loginput" type="text" />
						</td>
						<td>
							<input name="yoe4" class="loginput" type="text" />
							</td>
					</tr>
					<tr>
							<td>
							<input name="subcode5" class="loginput" type="text" />
							</td>
							<td>
							<input name="internal5" class="loginput" type="text" />
							</td>
							<td>
							<input name="external5" class="loginput" type="text" />
						</td>
							<td>
							<input name="credit5" class="loginput" type="text" />
						</td>
							<td>
							<input name="grade5" class="loginput" type="text" />
						</td>
						<td>
							<input name="yoe5" class="loginput" type="text" />
							</td>
					</tr>
					<tr>
							<td>
							<input name="subcode6" class="loginput" type="text" />
							</td>
							<td>
							<input name="internal6" class="loginput" type="text" />
							</td>
							<td>
							<input name="external6" class="loginput" type="text" />
						</td>
							<td>
							<input name="credit6" class="loginput" type="text" />
						</td>
							<td>
							<input name="grade6" class="loginput" type="text" />
						</td>
						<td>
							<input name="yoe6" class="loginput" type="text" />
							</td>
					</tr>
					<tr>
							<td>
							<input name="subcode7" class="loginput" type="text" />
							</td>
							<td>
							<input name="internal7" class="loginput" type="text" />
							</td>
							<td>
							<input name="external7" class="loginput" type="text" />
						</td>
							<td>
							<input name="credit7" class="loginput" type="text" />
						</td>
							<td>
							<input name="grade7" class="loginput" type="text" />
						</td>
						<td>
							<input name="yoe7" class="loginput" type="text" />
							</td>
					</tr>
					<tr>
							<td>
							<input name="subcode8" class="loginput" type="text" />
							</td>
							<td>
							<input name="internal8" class="loginput" type="text" />
							</td>
							<td>
							<input name="external8" class="loginput" type="text" />
						</td>
							<td>
							<input name="credit8" class="loginput" type="text" />
						</td>
							<td>
							<input name="grade8" class="loginput" type="text" />
						</td>
						<td>
							<input name="yoe8" class="loginput" type="text" />
							</td>
					</tr>
						</table>
						</fieldset>
						<br/>
						<input type="submit" value="Submit Marks for this Semester" name ="submit" style="margin-bottom:25px;margin-right: 400px;" class="loginput" align="center">
					</form>
				</table>

			</table>
		</div>
		</div>
      </body>
</html>