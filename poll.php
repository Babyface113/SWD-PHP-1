<?php

$dsn = 'mysql:host=127.0.0.1;dbname=koledz';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);

$sql = 'select * from poll';
$query = $db->query($sql);
$res = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<form action="poll_back.php" method="post">
<span>What's your favorite food?</span>
<ul>
	<?php foreach($res as $row){ ?>
	<li>
		<label>
			<input type="radio" name="answer" value="<?=$row['id']?>">
			<span><?=$row['odgovor']?> [<?=$row['glasovi']?>]</span>
		</label>
	</li>
	<?php } ?>
</ul>
<button type="submit">Vote!</button>
</form>