<?php 

// print_r($_POST);

$a = $_POST['a'];
$b = $_POST['b'];
$op = $_POST['op'];

echo $a.' '.$op.' '.$b.' = ';

if($op == '+'){
	echo $a + $b;
}

if($op == '-'){
	echo $a - $b;
}

if($op == '/'){
	echo $a / $b;
}

if($op == '*'){
	echo $a * $b;
}

if($op == '%'){
	echo $a % $b;
}

?>