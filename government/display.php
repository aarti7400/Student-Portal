<html>
<head><title>Display</title></head>
<body>
    <center> <span class="style2"><h2>Uploaded Files</h2></span>
	 </center>
	  <?php
session_start();
$un=$_SESSION['uname'];
 $cn = mysql_connect("localhost", "root");
mysql_select_db("notes",$cn);
  $sql = "SELECT upno,staff.staffid,upldate,upltime,subcode,fileuplpath,title,type,upload.semester,staff.branch FROM upload,staff WHERE staff.staffid=upload.staffid and staff.uname='$un'";
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
echo "<th>semester</th>";
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
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "</tr>";
  }
echo "</table></center>";
 ?>
  </p>
</div>

</body>
</html>