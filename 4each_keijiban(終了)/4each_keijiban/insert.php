<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");

$実行回数 = $pdo->exec("insert into 4each_keijiban(handlename,title,comments)values('".$_POST['ind_handlename']."','".$_POST['ind_title']."','".$_POST['ind_comments']."');");

//echo $実行回数;

header("Location:http://localhost/4each_keijiban/index.php");
//echo "insert into 4each_keijiban(handlename,title,comments)values('".$_POST['ind_handlename']."','".$_POST['ind_title']."','".$_POST['ind_comments']."');"
  
  ?>