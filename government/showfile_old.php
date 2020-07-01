<?php


  header('Content-type: application/pdf');
  $con = mysql_connect("localhost", "root", "");
  $db = mysql_select_db("notes");

  $uname = $_GET['fname'];

  $sql = "SELECT  fileuplpath,Filedata FROM upload WHERE fileuplpath = '$uname'";

  $query = mysql_query($sql);

  $record = mysql_fetch_assoc($query);

    $name = $record['fileuplpath'];
  //  $type = $record['fileType'];
  //  $size = $record['fileSize'];
    $pdf = $record['filedata'];
echo $name,$pdf;
$size=1000000000000;
  header('Content-Disposition: attachment; filename=' . $name);
  header('Content-length:' . $size);
  header('Content-Transfer-Encoding: binary');
  header('Content-type: application/pdf');
  echo $pdf;


 ?>
