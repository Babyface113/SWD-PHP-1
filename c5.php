<?php 

$a = $_POST['a'];
$op = $_POST['op'];

if($op == 'f'){
	echo $a * 9/5 + 32;
}

if($op == 'c'){
	echo ($a - 32) * 5/9;
}

?>