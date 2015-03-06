<?php 

// $a = 1;
// echo $a;


// $a = array(3, 5, 1, 8, 11, 'pero');
// echo $a;

// print_r($a);
// echo $a[3];

// $a = array();

// $a[] = 'pero';
// $a[] = 'janko';
// $a[] = 'stanko';

// print_r($a);

// $a[5] = 'Skopje';
// $a[11] = 'Tetovo';
// $a[101] = 'Gostivar';
// $a[6] = 'Gevgelija';
// $a[] = 'Kumanovo';

// print_r($a);



// $a = array(10 => 'Makedonija', 20 => 'Germanija', 50 => 'Shvicarska', 100 => 'Zimbabve');

// $a = [2, 4, 6, 8, 9];

// print_r($a);



// $a = array(
// 		TRUE, 
// 		'Stringkje', 
// 		1001, 
// 		3.14,
// 		array(
// 			'pero',
// 			'janko',
// 			'stanko'
// 		),
// 		array(
// 			'new york',
// 			'paris',
// 			'london'
// 		)
// 	);

// print_r($a);

// echo $a[4][1];
// echo "<br>";
// echo $a[1];
// echo "<br>";
// echo $a[5][2];
// echo '<br>';
// echo $a[5][0];
// echo '<br>';


// $student = array();
// $student['ime'] = 'Bojan';


// print_r($student);

$tabela = array(
	array(
		'ime' => 'Bojan',
		'prezime' => 'Gavrovski',
		'telefon' => 223305,
	),
	array(
		'ime' => 'Pero',
		'prezime' => 'Perovski',
		'telefon' => 985734,
	),
	array(
		'ime' => 'Janko',
		'prezime' => 'Jankovski',
		'telefon' => 423423,
	),
	array(
		'ime' => 'Sotir',
		'prezime' => 'Lalevski',
		'telefon' => 825385,
	)
);

echo $tabela[0]['ime'];

?>