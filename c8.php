<?php 

// $a = 10; // integer
// $b = '10'; // string

// if($a === $b){
// 	echo "da";
// }else{
// 	echo "ne";
// }


// $c = 'test test test';

// if ($c == 3) {
// 	echo "ednakvo na 3";
// } else {
// 	echo "nekoj drug broj";
// }

// $d = 10;

// if($d < 10){
// 	echo "pomalo od 10";
// }else if($d > 10){
// 	echo "pogolemo od 10";
// }else/* if($d == 10)*/{
// 	echo "ednakvo na 10";
// }


$ime = 'Aleksandar Trajkovski';

$br = strlen($ime); // strlen ja vrakja dolzhinata na stringot vo promenlivata $ime

// echo $br;

$chisto_ime = str_replace(' ', '', $ime);

$br2 = strlen($chisto_ime);

// echo $br2;


// $e = 9;

// if(($e == 10 && $e < 10) || $e == 9){
// 	echo "vistina";
// }


$f = 11;

switch($f){
	case 11:
		echo "11";
	break;
	case 10:
		echo "10";
	break;
}


// $ime = 'Ardi';
// $dolzina = strlen($ime);
// $ostatok = $dolzina % 2;

// switch ($ostatok) {
// 	case 0:
// 		echo "parno ime";
// 		break;
	
// 	case 1:
// 		echo "neparno ime";
// 		break;
// }


// $name = 'Janko';

// switch ($name) {
// 	case 'Bojan':
// 		echo "imeto e Bojan";
// 		break;
	
// 	case 'Pero':
// 		echo "imeto e Pero";
// 		break;

// 	case 'Ivana':
// 		echo "imeto e Ivana";
// 		break;

// 	case 'Aleksandar':
// 		echo "imeto e Aleksandar";
// 		break;

// 	default:
// 		echo "nepoznato ime";
// 		break;
// }


$ime = "Pero";

echo "<br>";
echo "Moeto ime e $ime";
echo "<br>";
echo 'Moeto ime e $ime';
echo "<br>";
echo 'Moeto ime e '.$ime;

?>