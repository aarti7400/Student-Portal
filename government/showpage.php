<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Upload Document</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link href="blue.css" rel="stylesheet" type="text/css">
<link href="red5.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
	<div id="topmenu">
		<ul>
			<li><a href="index.php" id="topmenu1" accesskey="1" title="">Home</a></li>
			<li><a href="contact.html" id="topmenu2" accesskey="2" title="">Contact</a></li>
            <li><a href="index.php" id="topmenu2" accesskey="2" title="">Log Out</a></li>
	
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#">EDUCATIONAL WEBSITE</a></h1>
		<h2><a href="#">government polytechnic, dhule</a></h2>
  </div>
</div>

<form name=frm method=post action=showpage.php>
<br><br><br><br><center>
<center>
</center>
<span class="blue">
<input type=submit name=sbm value="Add_Notice">
<input type=submit name=sbm value="Upload_Document">
</span>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="Add_Notice")
header("location:http://localhost/notes/notice.php");
else
header("location:http://localhost/notes/upload.php");
}
?>
