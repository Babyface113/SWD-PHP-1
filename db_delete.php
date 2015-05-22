<?php 



$dsn = 'mysql:host=127.0.0.1;dbname=koledz';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);

// echo $_GET['id'];

$sql = 'delete from studenti where id = '.$_GET['id'];
$db->query($sql);

header('location:db1.php');
























 ?>