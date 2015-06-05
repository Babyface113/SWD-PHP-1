<?php 
$db = dbo();
$sql = 'select * from admin_users';
$query = $db->prepare($sql);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Users</h2>
<form action="?p=users_add" method="post">
	<label for="name">
		Name: 
		<input type="text" value="" name="name" required>
	</label>
	
	<label for="name">
		Email: 
		<input type="email" value="" name="email" required>
	</label>
	
	<label for="name">
		Password:
		<input type="password" value="" name="password" required>
	</label>
	<button>Add User</button>
</form>
<hr>
<table border="1" width="50%">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['name']?></td>
		<td><?=$row['email']?></td>
		<td>
			<a href="?p=users_edit&id=<?=$row['id']?>">Edit</a>
		</td>
		<td>
			<a href="?p=users_delete&id=<?=$row['id']?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>