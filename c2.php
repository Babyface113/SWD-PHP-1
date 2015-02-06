<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>New Page</title>
	</head>
	<body>
		<form action="c2.php" method="get">
			<input type="text" name="ime"/>
			<input type="text" name="prezime"/>
			<button type="submit">Pozdrav!</button>
		</form>		
		<?php 
			echo "Zdravo ".$_GET["ime"]." ".$_GET['prezime']."!";
		?>
		<!--  -->
		<form action="c2.php" method="post">
			<input type="text" name="ime"/>
			<input type="text" name="prezime"/>
			<button type="submit">Pozdrav!</button>
		</form>		
		<?php 
			echo "Zdravo ".$_POST["ime"]." ".$_POST['prezime']."!";
		?>
	</body>
</html>