<html>
<head><title>Upload Form</title></head>
<body>
<form name=frm method=post action=upload.php enctype="multipart/form-data">
<center> 
  <table><caption><h2>Upload Information</h2></caption>
 <input type="hidden" name="MAX_FILE_SIZE" value="5000000000000000000000000000000000000000000000000000000000">
<tr>
<td> Upload No : </td>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sql="select count(*) from upload";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$x=$row[0]+1;
?>
<td><input type=text name=uplno size=20 value=<?php echo $x; ?> ></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Upload Date : </td>
<td><input type=text name=upldt size=20 value=<?php echo date('Y-m-d'); ?>></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Upload Time : </td>
<td><input type=text name=upltm size=20 value=<?php echo time();?> ></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Staff Id : </td>
<td><select name=sid>
<?php
$sql="select staffid from staff";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[0]</option>";
}
?>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Branch : </td>
<td>
<select name=bra>
<option value="Computer Engineering">Computer Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Automobile Engineering">Automobile Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Electronics Engineering">Electronics Engineering</option>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Semester: </td>
<td>
<select name=sem>
<option value="First Semester">First Semester</option>
<option value="Second Semester">Second Semester</option>
<option value="Third Semester">Third Semester</option>
<option value="Fourth Semester">Fourth Semester</option>
<option value="Fifth Semester">Fifth Semester</option>
<option value="Sixth Semester">Sixth Semester</option>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Subject Code : </td>
<td>
<select name=scod>

<option value=17101>17101</option>
<option value=17104>17104</option>
<option value=17102>17102</option>
<option value=17103>17103</option>
<option value=17002>17002</option>

<option value=17201>17201</option>
<option value=17216>17216</option>
<option value=17210>17210</option>
<option value=17211>17211</option>
<option value=17212>17212</option>
<option value=17013>17013</option>
<option value=17213>17213</option>

<option value=17330>17330</option>
<option value=17332>17332</option>
<option value=17301>17301</option>
<option value=17333>17333</option>
<option value=17331>17331</option>
<option value=17026>17026</option>

<option value=17429>17429</option>
<option value=17432>17432</option>
<option value=17428>17428</option>
<option value=17431>17431</option>
<option value=17056>17056</option>
<option value=17401>17401</option>

<option value=17515>17515</option>
<option value=17514>17514</option>
<option value=17513>17513</option>
<option value=17512>17512</option>
<option value=17076>17076</option>
<option value=17061>17061</option>

<option value=17625>17625</option>
<option value=17627>17627</option>
<option value=17624>17624</option>
<option value=17816>17816</option>
<option value=17601>17601</option>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>File Type : </td>
<td>
<select name=type>
<option value=Syllabus>Syllabus</option>
<option value=Notes>Notes</option>
<option value="Question Paper">Question Paper</option>
<option value="Model Answer Paper">Model Answer Paper </option>
<option value=EBooks>E-Books</option>
<option value="Source Code">Source Codes</option>
</select>
</td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>File Upload Path : </td>
<td><input name="pdf" type="file"></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>Title : </td>
<td><input type=text name=tit size=35></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
</table>
<div class="red">
<input type=submit name=sbm value=Submit>&nbsp;&nbsp;
<input type=reset name=rst value=Reset>
&nbsp;&nbsp;
<!--<input type=submit name=sbm value=Display>-->
<input type=submit name=sbm value=Delete>
<!--<input type=submit name=sbm value=Update>-->&nbsp;&nbsp;</div>
</center>
</form>

</body>
</html>


<?php

if(isset($_POST['sbm']))
{
echo $_FILES['pdf']['name'];
$cn=mysql_connect("localhost","root");
mysql_select_db("notes",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$p=$_FILES['pdf']['name'];
//$name = $_FILES['pdf']['name'];
$pdf = mysql_real_escape_string(file_get_contents($_FILES['pdf']['tmp_name']));
$sql="insert into upload values('$_POST[uplno]','$_POST[sid]','$_POST[upldt]','$_POST[upltm]','$_POST[scod]','$p','$_POST[tit]','$_POST[type]','$_POST[sem]','$_POST[bra]','$pdf')";
mysql_query($sql,$cn) or die(mysql_error());
/////
$target_path = "ram/";
$target_path = $target_path . basename( $_FILES['pdf']['name']); 
if(move_uploaded_file($_FILES['pdf']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['pdf']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
/////
echo "Data Is Stored";
}
else
if($sb=="Update")
{
$name = $_FILES['pdf']['name'];
$pdf = mysql_real_escape_string(file_get_contents($_FILES['pdf']['tmp_name']));
$sql="update upload set upno='$_POST[uplno]',staffid='$_POST[sid]',upldate='$_POST[upldt]',upltime='$_POST[upltm]',subcode='$_POST[scod]',fileuplpath='$_POST[file]',title='$_POST[tit]',type='$_POST[type]',semester='$_POST[sem]',branch='$_POST[bra]', filedata='$pdf' where subcode='$_POST[scod]'";
mysql_query($sql,$cn);
echo "Data Is updated";
}
else
if($sb=="Delete")
{
$sql="delete from upload  where upno='$_POST[uplno]'";
mysql_query($sql,$cn);
echo "Data Is deleted";
}
else
if($sb=="Display")
{
$sql="select * from upload";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo "<tr>";
echo "<th>upload no</th>";
echo "<th>staff id</th>";
echo "<th>upload date</th>";
echo "<th>upload time</th>";
echo "<th>subject code</th>";
echo "<th>file path</th>";
echo "<th>title</th>";
echo "<th>type</th>";
echo "<th>semester</th>";
echo "<th>branch</th>";
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
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>