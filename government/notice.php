<html>
<head><title>Notice</title></head>
<body>
<br>
<br>
<form name=frm method=post action=notice.php>
<center><table><caption><h2>Add Notice</h2></caption>
<tr>
<td>Sr.No.</td>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="select max(srno) from notice";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$x=$row[0]+1;
echo "<td><input type=text name=sr value=$x></td>";
?>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<Td>Notice Date : </td>
<td><input type=text name=dt value=<?php echo date('Y-m-d'); ?>></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Notice :</td>
<td><textarea name=nt cols="30" rows="5" placeholder="Add Notice"></textarea></td>
</tr>
</table>
<div class="red4">
<input type=submit name=sbm value=Submit>
<input type=submit name=sbm value=Delete>
</div>
</center>
</form>
</body>
</html>

<?php
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
if($sb=='Submit')
{
$sql="insert into notice values('$_POST[dt]','$_POST[nt]','$_POST[sr]')";
mysql_query($sql,$cn);
echo "stored";
}
else
{
$sql="delete from notice where ndate<='$_POST[dt]'";
mysql_query($sql,$cn);
echo "deleted";
}
}
?>

