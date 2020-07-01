<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Notice Display</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: medium;
	font-weight: bold;
}
-->
</style>
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
		<h1><a href="#">eDUCATIONAL wEBSITE</a></h1>
		<h2><a href="#">government Polytechnic, dhule</a></h2>
  </div>
</div>
<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="index.php" class="style1 style1">BACK</a>
<center><h2>Notices</h2></center>

<?php

 $cn = mysql_connect("localhost", "root");
mysql_select_db("notes",$cn);

  $sql = "SELECT ndate,notice_text,srno from notice ";
  $result = mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<tr>";
echo "<th>Sr NO</th>";
echo "<th>Date</th>";
echo "<th>Notice</th>";
echo "</tr>";
  while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[2]</td>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "</tr>";
}
echo "</table></center>";
?>
</body>
</html>