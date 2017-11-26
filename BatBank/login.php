<?php
session_start();
error_reporting(0);
include("connect.php");

if(($_REQUEST['error'])=='nologin')
    $logininfo="Please Sign In to Continue";
else if(($_REQUEST['error'])=='forgetpass')
    $logininfo="Please contact the nearest branch";
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
if ((isset($_REQUEST['login'])))
{
$password = mysql_real_escape_string($_REQUEST['password']);
$logid= mysql_real_escape_string($_REQUEST['login']);
$query="SELECT * FROM customers WHERE loginid='$logid' AND accpassword='$password'";
$res=  mysql_query($query);
if(mysql_num_rows($res) == 1)
	{
		while($recarr = mysql_fetch_array($res))
		{
			
		$_SESSION['customerid'] = $recarr['customerid'];
		$_SESSION['ifsccode'] = $recarr['ifsccode'];
		$_SESSION['customername'] = $recarr['firstname']. " ". $recarr['lastname'];
		$_SESSION['loginid'] = $recarr['loginid'];
		$_SESSION['accstatus'] = $recarr['accstatus'];
		$_SESSION['accopendate'] = $recarr['accopendate'];
		$_SESSION['lastlogin'] = $recarr['lastlogin'];		
		}
		$_SESSION["loginid"] =$_POST["login"];
		header("Location: accountalerts.php");
	}
else{
	$res = mysql_query("SELECT * FROM employees WHERE loginid='$logid' AND password='$password'");


	if(mysql_num_rows($res) == 1)
	{
		$_SESSION["adminid"] =$_POST["login"];
		header("Location: admindashboard.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}
}
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
<?php if(isset($logininfo))
    {  echo"<div class='logmainbox' style='width:450px;'><h1>$logininfo</h1></div>"; } ?>    
             <div class="logmainbox">
        <form action="login.php" method="POST">
            <h1>Sign In</h1>
            <div class="loginset">
                <p>
                    <label class="Ltext">Username</label>
                    <input type="text" name="login" class="loginput">
                </p>
                <p>
                    <label class="Ltext" for="password">Password</label>
                    <input type="password" name="password" class="loginput">
                </p>
            </div>
            <!--<p class="p-container">
                <a href="login.php?error=forgetpass">Forgot password ?</a><br/>-->
                <input type="submit" name="go" id="go" style="margin-bottom:25px;margin-right: 190px;" value="Log in" class="loginput">
            </p> 
        </form>
    </div>
    </div>
</body>
</html>
