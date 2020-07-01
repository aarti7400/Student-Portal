<?php
  $con = mysql_connect("localhost", "root");
  $db = mysql_select_db("notes",$con);

  $uname = $_GET['fname'];

  $sql = "SELECT  fileuplpath,Filedata FROM upload WHERE fileuplpath = '$uname'";

  $query = mysql_query($sql,$db);

  $record = mysql_fetch_array($query);

    $name = $record[0];
  //  $type = $record['fileType'];
  //  $size = $record['fileSize'];
    $pdf = $record[1];
echo $name,$pdf;
  header('Content-Disposition: attachment; filename=' . $name);
 // header('Content-length:' . $size);
  header('Content-Transfer-Encoding: binary');
  header('Content-type: application/pdf');
  echo $pdf;
 ?>
