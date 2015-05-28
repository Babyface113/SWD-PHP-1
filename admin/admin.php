<?php 
session_start();

include 'functions.php';

loginCheck();

$page = 'dashboard';
$pageImport = 'admin_dashboard.php';

if(isset($_GET['p']) && strlen(trim($_GET['p'])) > 0){
	$page = $_GET['p'];
}

$pageFile = 'admin_'.$page.'.php';

if(file_exists($pageFile)){
	$pageImport = $pageFile;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<header>
			<ul>
				<li><a href="?p=dashboard">Dashboard</a></li>
				<li><a href="?p=posts">Posts</a></li>
				<li><a href="?p=users">Users</a></li>
				<li><a href="?p=polls">Polls</a></li>
				<li><a href="logout.php">Log out</a></li>
			</ul>
		</header>
		<main>
			<?php include $pageImport; ?>
		</main>
		<footer></footer>
	</body>
</html>