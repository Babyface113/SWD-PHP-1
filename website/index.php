<?php 
$strana = 'home.php';
$css = 'home';

if(isset($_GET['page']) && strlen($_GET['page']) > 0){
	if(file_exists($_GET['page'].'.php')){
		$strana = $_GET['page'].'.php';
		$css = $_GET['page'];
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?=$css?></title>
		<link rel="stylesheet" href="styles/<?=$css?>.css">
	</head>
	<body>
		<header>
			<nav>
				<a href="?page=home">Home</a>
				<a href="?page=gallery">Gallery</a>
				<a href="?page=about">About</a>
				<a href="?page=contact">Contact</a>
			</nav>
		</header>		
		<main>
			<?php include($strana);?>
		</main>
		<footer>
			
		</footer>
	</body>
</html>