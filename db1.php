<?php 

$dsn = 'mysql:host=127.0.0.1;dbname=koledz';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);

$query = $db->query('select * from studenti where koledz_id = 1');

// $query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

// print_r($res);


?>

<table border="1">
	<tr>
		<th>id</th>
		<th>ime</th>
		<th>prezime</th>
		<th>koledz_id</th>
		<th>delete</th>
	</tr>
	<?php foreach($res as $row){ ?>
		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['ime']?></td>
			<td><?=$row['prezime']?></td>
			<td><?=$row['koledz_id']?></td>
			<td><a href="db_delete.php?id=<?=$row['id']?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>