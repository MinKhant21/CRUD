<?php

$db = new PDO("mysql:host=127.0.0.1;dbname=web_batch_3",'root','');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM info where id='$id'";
$db->exec($sql);
header("location:index.php");
?>