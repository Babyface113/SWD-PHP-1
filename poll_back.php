<?php 

$dsn = 'mysql:host=127.0.0.1;dbname=koledz';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);

$sql = 'update poll set glasovi = glasovi + 1 where id = '.$_POST['answer'];
$db->query($sql);

header('location: poll.php');

?>