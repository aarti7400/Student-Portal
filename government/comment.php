<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="topmenu">
		<ul>
			
			
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#">EDUCATIONAL WEBSITE</a></h1>
		<h2><a href="#">Government polytechnic, Dhule</a></h2>
  </div>
</div>
<div id="menu">
	<ul>
		
        <li><a href="download.php" title="">Course Material</a></li>
        <li><a href="comment.php" title="">Forum</a></li>
        <li><a href="about.html" title="">About Us</a></li>
        <li><a href="contact.html" id="topmenu2" accesskey="2" title="">Contact</a></li>
	
	</ul>
</div>

<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['cno']))
{
$err1="<font color=red>comment no must exist</font>";
$fl=1;
}
if(empty($_POST['upno']))
{
$err2="<font color=red>upload no must exist</font>";
$fl=1;
}
if(empty($_POST['sid']))
{
$err3="<font color=red>student id must exist</font>";
$fl=1;
}
if(empty($_POST['cmt']))
{
$err4="<font color=red>comment must exist</font>";
$fl=1;
}
if(empty($_POST['cdt']))
{
$err5="<font color=red>comment date must exist</font>";
$fl=1;
}
}
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="select count(*) from comment";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(comment_no) from comment";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$cn=$row[0]+1;
}
else
$cn=1;
?>
<html>
<body>
<form name=frm method=post action=comment.php>
<center><table>
<tr>
<td>comment_no</td>
<td><input type=text name=cno value=<?php echo $cn; ?>><?php echo $err1; ?></td>
</tr>
<tr>
<td>upload_no</td>
<td><input type=text name=upno><?php echo $err2; ?></td>
</tr>
<tr>
<td>student_id</td>
<td><input type=text name=sid><?php echo $err3; ?></td>
</tr>
<tr>
<td>comment</td>
<td><input type=text name=cmt><?php echo $err4; ?></td>
</tr>
<tr>
<td>comment_date</td>
<td><input type=date name=cdt><?php echo $err5; ?></td>
</tr>
</table>
<input type=submit name=sbm value=submit>
<input type=submit name=sbm value=display>
</form>
</center>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
echo $fl;
if($fl==0)
{
$sql="insert into comment values('$_POST[cno]','$_POST[upno]','$_POST[sid]','$_POST[cmt]','$_POST[cdt]','N')";
mysql_query($sql,$cn);
echo "record saved";
}
}
else
if($_POST['sbm']=="display")
{
$sql="select * from comment where reply<>'N'";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<tr>";
echo "<th>comment_no</th>";
echo "<th>upload_no</th>";
echo "<th>student_id</th>";
echo "<th>comment</th>";
echo "<th>comment_date</th>";
echo "<th>reply</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>