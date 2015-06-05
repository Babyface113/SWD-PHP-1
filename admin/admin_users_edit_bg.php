<?php 
$db = dbo();
$sql = 'update admin_users set email = :email, password = :password where id = :id';
$query = $db->prepare($sql);
$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$query->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$query->execute();
header('location: ?p=users');
?>