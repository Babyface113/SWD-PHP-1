<?php 
$db = dbo();
$sql = 'delete from admin_users where id = :id';
$query = $db->prepare($sql);
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
header('location: ?p=users');
?>