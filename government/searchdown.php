<?php
 // header('Content-type: application/pdf');

 $cn = mysql_connect("localhost", "root");
mysql_select_db("notes",$cn);
  $sql = "SELECT upno,staffid,upldate,upltime,subject.subject,fileuplpath,title,type,upload.branch FROM upload,subject WHERE upload.subcode=subject.subcode and subject.subcode='$_POST[search]'";
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
