<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Staff Information</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link href="red1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
	<div id="topmenu">
		<ul>	
		
			<li><a href="index.php" id="topmenu1" accesskey="1" title="">Log Out</a></li>
	
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#">EDUCATIONAL WEBSITE</a></h1>
		<h2><a href="#">government polytechnic, dhule</a></h2>
  </div>
</div>
<br><br><br><br>
<form name=frm method=post action=staff.php >
<center><table><caption><h2>Staff Information</h2></caption>
<tr>
<td>Staff Id : </td>
<td><input type=text name=sid size=50 placeholder="Enter Staff ID"></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Staff Name : </td>
<td><input type=text name=snm size=50 placeholder="Enter Staff Name"></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> User Name : </td>
<td><input type=text name=unm size=50 placeholder="Enter User Name"></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Password : </td>
<td><input type=password name=ps size=50 placeholder="Enter Password"></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Institute Code : </td>
<td>
<select name=ic>
<option value=0059>0059</option>
<option value=0017>0017</option>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Branch : </td>
<td>
<select name=br><option value="Computer Engineering">Computer Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Automobile Engineering">Automobile Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Electronics Engineering">Electronics Engineering</option>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Email Id : </td>
<td><input type=text name=em size=50 placeholder="Enter E-Mail"></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Mobile No : </td>
<td><input type=text name=mo size=20 placeholder="Enter Mobile No"></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
</table>
<div class="red">
<input type=submit name=sbm value=Submit>
<input type=reset name=rst value=Reset>
<input type=submit name=sbm value=Display>
<input type=submit name=sbm value=Delete>
<input type=submit name=sbm value=Update>
</div>
</center>
</form>
</body>
</html>


<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
if(!empty($_POST['sid']) && !empty($_POST['snm']))
{
$ss="select count(*) from staff where staffid='$_POST[sid]'";
$rr=mysql_query($ss,$cn);
$rw=mysql_fetch_array($rr);
if($rw[0]==0)
{
$sql="insert into staff values('$_POST[sid]','$_POST[snm]','$_POST[unm]','$_POST[ps]','$_POST[br]','$_POST[ic]','$_POST[em]','$_POST[mo]')";
mysql_query($sql,$cn);
echo "Data Is Stored";
}
else
{
echo "already exist";
}
}
else
echo "empty columns are there";
}
else
if($sb=="Update")
{
$sql="update staff set staffid='$_POST[sid]',staffname='$_POST[snm]',uname='$_POST[unm]',password='$_POST[ps]',branch='$_POST[br]',institutecode='$_POST[ic]',emailid='$_POST[em]',mobno='$_POST[mo]' where staffid='$_POST[sid]'";
mysql_query($sql,$cn);
echo "Data Is updated";
}
else
if($sb=="Delete")
{
$sql="delete from staff  where staffid='$_POST[sid]'";
mysql_query($sql,$cn);
echo "Data Is deleted";
}
else
if($sb=="Display")
{
$sql="select * from staff";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<tr>";
echo "<th>staffid</th>";
echo "<th>name</th>";
echo "<th>user name</th>";
echo "<th>password</th>";
echo "<th>branch</th>";
echo "<th>institute code</th>";
echo "<th>email id</th>";
echo "<th>mobile no</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<TR>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>