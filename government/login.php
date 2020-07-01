<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="topmenu">
		<ul>
			<li><a href="index.php" id="topmenu1" accesskey="1" title="">Home</a></li>
			<li><a href="contact.html" id="topmenu2" accesskey="2" title="">Contact</a></li>
	
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#">EDUCATIONAL WEBSITE</a></h1>
		<h2><a href="#">government Polytechnic, dhule</a></h2>
	</div>
</div>
<div id="menu">
	<ul>
		
		<li><a href="download.php" title="">Course Material</a></li>
		<li><a href="about.html" title="">About Us</a></li>
	</ul>
</div>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="select count(*) from staff where uname='$_POST[inputtext1]' and password='$_POST[inputtext2]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
session_start();
$_SESSION['uname']=$_POST['inputtext1'];
header('Location:/government/home.html');
}
else
if($_POST['inputtext1']=="admin" and $_POST['inputtext2']=="admin")
header('Location:/government/admin.php');
else
echo "invalid username and or password";
?>