<?php 
$db = dbo();
$sql = 'select * from admin_users where id = :id';
$query = $db->prepare($sql);
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC)[0];
?>
<h2>Edit User</h2>
<form action="?p=users_edit_bg" method="post">
	<label for="name">
		Name: <br>
		<input type="text" value="<?=$res['name']?>" disabled name="name">
	</label>
	<br>
	<label for="name">
		Email: <br>
		<input type="text" value="<?=$res['email']?>" name="email">
	</label>
	<br>
	<label for="name">
		Password: <br>
		<input type="text" value="<?=$res['password']?>" name="password">
	</label>
	<input type="hidden" name="id" value="<?=$res['id']?>">
	<br>
	<button type="submit">Edit User</button>
</form>