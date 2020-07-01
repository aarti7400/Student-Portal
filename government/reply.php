<?php
$err1="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['rep']))
{
$err1="<font color=red>comment no must exist</font>";
$fl=1;
}
}
?>
<html>
<body>
<form name=frm method=post action=reply.php>
<center><table>
<tr>
<td>comment</td>
<td><select name=cn>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="select * from comment where reply='N'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[3]</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>reply</td>
<td><input type=text name=rep><?php echo $err1; ?></td>
</tr>
</table>
<input type=submit name=sbm value=submit>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="update comment set reply='$_POST[rep]' where comment_no='$_POST[cn]'";
mysql_query($sql,$cn);
echo "successfully committed";
}
?>