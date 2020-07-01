<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Upload Document</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link href="blue.css" rel="stylesheet" type="text/css">
<link href="red5.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body>
<div id="header">
	<div id="topmenu">
		<ul>
		    <li><a href="index.php" id="topmenu2" accesskey="2" title="">Log Out</a></li>
		<br><br><br><h2 font>
		<?php
		session_start();
		$un=$_SESSION['uname'];
		echo "Welcome ";
		echo $un;
		?></h2>
	
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#">EDUCATIONAL WEBSITE</a></h1>
		<h2><a href="#">S.S.V.P.S B.S.Deore polytechnic</a></h2>
  </div>
</div>

<form name=frm method=post action=showpage.php>
<br><br><br><br><center>

<center>
</center>
</form>
<div id="page" align="left">
	<div id="content">
	

		<div id="sample2" class="boxed3">
		  <table width="702" height="378" border="0">
            <tr>
              <td width="200" bgcolor="#99CCFF">
			    <p align="left" class="style1"><a href="notice.php" target="ex.php">Add Notice </a></p>
		      <p align="left" class="style1"><a href="upload.php">Upload Document</a></p>
		      <p align="left" class="style1"><a href="display.php">Display Document</a> </p></td>
              <td width="486"><div align="center"><img src="logo.jpg" alt="logo" width="229" height="260"></div></td>
            </tr>
          </table>
		</div>
  </div>
	<!-- end #content -->
	
	<!-- end #sidebar -->
	<div style="clear: both; height: 1px;"></div>
</div>
<!-- end #page -->
<div id="footer">
	<p id="legal">Department Of Computer Engineering:Designed By Aamale Nitin,Shaikh Haroon,Adhav Gaurav,Shaikh Ajim</p>
	
</div>
</body>
</html>
