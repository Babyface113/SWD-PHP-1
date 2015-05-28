<?php 
session_start();
include 'functions.php';

if(isset($_POST['username']) && isset($_POST['password']) && strlen(trim($_POST['username'])) > 0 && strlen(trim($_POST['password'])) > 0){

	$db = dbo();
	$sql = "select * from admin_users where email = :email and password = :password";
	$query = $db->prepare($sql);
	$query->bindValue(':email', $_POST['username'], PDO::PARAM_STR);
	$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);

	if(count($res) == 1){
		$_SESSION['name'] = $res[0]['name'];
		$_SESSION['email'] = $res[0]['email'];
		$_SESSION['user_id'] = $res[0]['id'];
		header('location: admin.php');
	}else{
		header('location: index.html');	
	}

}else{
	header('location: index.html');
}

?>