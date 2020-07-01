<html>
<body>
<form name=frm method=post action=page99.php>
userid=<input type=text name=uid><br>
username=<input type=text name=nm><br>
password=<input type=text name=ps><br>
<input type=submit name=sbm value=insert>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=delete>
<input type=submit name=sbm value=display>
</form>
</body>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("ranking",$cn);
$sb=$_POST['sbm'];
if($sb=="insert")
{
$sql="insert into user values('$_POST[uid]','$_POST[nm]','$_POST[ps]')";
mysql_query($sql,$cn);
echo "record is saved";
}
else
if($sb=="update")
{
$sql="update user set username='$_POST[nm]',password='$_POST[ps]' where userid='$_POST[uid]'";
mysql_query($sql,$cn);
echo "record is updated";
}
else
if($sb=="delete")
{
$sql="delete from user where userid='$_POST[uid]'";
mysql_query($sql,$cn);
echo "record is deleted";
}
else
if($sb=="display")
{
$sql="select * from user";
$result=mysql_query($sql,$cn);
echo "<center><table border=2>";
echo "<tr>";
echo "<th>userid</th>";
echo "<th>username</th>";
echo "<th>password</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>