<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Download Document</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link href="red2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
	<div id="topmenu">
		<ul>
	
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#">eDUCATIONAL wEBSITE</a></h1>
		<h2><a href="#">government Polytechnic, Dhule</a></h2>
  </div>
</div>
<div id="menu">
	<ul>
		<li><a href="index.php" id="topmenu1" accesskey="1" title="">Home</a></li>
		<li><a href="contact.html" id="topmenu2" accesskey="2" title="">Contact</a></li>
		<li><a href="about.html" title="">About Us</a></li>
	</ul>
</div>
<br><br>
<form name=frm method=post action=download2.php>
  <input type="hidden" name="MAX_FILE_SIZE" value="900000000000000000000000000000000000">
<center><table><br><br>
<table width="364">
<?php
echo "<tr>";
echo "<td>Branch : </td>";
echo "<td>";
echo "<input type=text name=br value='$_POST[br]'></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
echo "<tr>";
echo "<td>Scheme : </td>";
echo "<td>";
echo "<input type=text name=sch value='$_POST[sch]'></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
echo "<tr>";
echo "<td> Semester : </td>";
echo "<td>";
echo "<input type=text name=sem value='$_POST[sem]'></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
?>
<tr>
<td width="142">Select Subject : </td>
<td width="297"><select name=sbj>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="select * from subject where scheme='$_POST[sch]' and semester='$_POST[sem]' and branch='$_POST[br]'";
$result=mysql_query($sql,$cn);

while($row=mysql_fetch_array($result))
{
echo "<option value=$row[1]>$row[1]</option>";
}
?>
</select></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Select Type : </td>
<td>
<select name=type1>
<option value=Syllabus>Syllabus</option>
<option value=Notes>Notes</option>
<option value="Que Paper">Question Paper</option>
<option value="Model Paper">Model Answer Paper </option>
<option value=Ebook>E-Books</option>
<option value=SourceCode>Source Codes</option>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
</table>
<br><br>
<div class="red2">
<input name=sbm type=submit value=Submit>
</div>
</center>
</form>
</body>
</html>