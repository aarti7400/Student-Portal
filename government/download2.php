<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Download Document</title>
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
		<h1><a href="#">eDUCATIONAL wEBSITE</a></h1>
		<h2><a href="#">government Polytechnic, Dhule</a></h2>
  </div>
</div>
<br><br><br>
<?php

 // header('Content-type: application/pdf');

 $cn = mysql_connect("localhost", "root");
mysql_select_db("notes",$cn);
  $sql = "SELECT upno,staffid,upldate,upltime,subject.subject,fileuplpath,title,type,upload.branch FROM upload,subject WHERE subject.scheme='$_POST[sch]' and subject.semester='$_POST[sem]' and subject.branch='$_POST[br]' and upload.subcode=subject.subcode and upload.type='$_POST[type1]' and subject.subject='$_POST[sbj]'";
  $result = mysql_query($sql,$cn);
echo "<center><table border=2>";
echo "<tr>";
echo "<th>upno</th>";
echo "<th>staffid</th>";
echo "<th>upldate</th>";
echo "<th>upltime</th>";
echo "<th>subcode</th>";
echo "<th>filepath</th>";
echo "<th>title</th>";
echo "<th>type</th>";
echo "<th>branch</th>";
echo "</tr>";
  while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td><a href=showfile.php?fname=".$row[5].">$row[5]</a></td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "</tr>";
  }
echo "</table></center>";
 ?>
</body>
</html>