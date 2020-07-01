<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link href="red6.css" rel="stylesheet" type="text/css">
<link href="red7.css" rel="stylesheet" type="text/css">
<link href="red8.css" rel="stylesheet" type="text/css">
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
		<h2><a href="#">Government polytechnic, Dhule</a></h2>
  </div>
</div>
<br><br><br><br><br>
<form name=frm method=post action=admin.php>
<center>
<div class="red7">
<br><br><br><table><caption><h2>Admin Login</h2></caption>

<tr>
<td><h4>Admin : </h4></td>
<td><input name=adm type=text value="admin"></td>
</tr> 	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td><h4>Password : </h4></td>
<td><input type=password name=pss></td>
</tr>
</table>
<p><br class="red7">
</p>
<div class="red6">
<input name=sbm type=submit class="red6" value=Submit>
</div>
</div>
</center>
</form>
<br><br><br><br><br><br><br>
<div id="footer">
	<p id="legal">Department Of Computer Engineering:Designed By Aarti Sharma, Priyanka Akhade, Shweta Pawar, Pratiksha Sarode</p>
	
</div>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
if($_POST[adm]=="admin" && $_POST['pss']=="admin")
{
header('Location:http://localhost/government/staff.php');
}
else
echo "invalid admin";
}
?>