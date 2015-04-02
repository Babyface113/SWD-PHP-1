<?php 

// $choveci = array(
// 	array('ime' => 'Pero', 'prezime' => 'Perovski', 'email' => 'p@p.com'),
// 	array('ime' => 'Janko', 'prezime' => 'Jankovski', 'email' => 'j@j.com'),
// 	array('ime' => 'Ivan', 'prezime' => 'Ivanovski', 'email' => 'i@i.com'),
// 	array('ime' => 'Stanko', 'prezime' => 'Stankovski', 'email' => 's@s.com'),
// 	array('ime' => 'Sotir', 'prezime' => 'Sotirovski', 'email' => 's@l.com')
// );

// $max_ime = 0;
// $ime = '';
// $min_prezime = 100;
// $prezime = '';

// foreach($choveci as $ardi){
// 	if(strlen($ardi['ime']) > $max_ime){
// 		$max_ime = strlen($ardi['ime']);
// 		$ime = $ardi['ime'];
// 	}

// 	if(strlen($ardi['prezime']) < $min_prezime){
// 		$min_prezime = strlen($ardi['prezime']);
// 		$prezime = $ardi['prezime'];
// 	}
// }


// echo "Najdolgo ime: ".$ime;
// echo '<br/>';
// echo "Nakratko prezime: ".$prezime;

/*
podredete ja nizata spored brojot na zapishani studenti od najgolem kon najmal

krajnata niza da izgleda vaka: 

$predmeti =  array(
	array('predmet' => 'Biologija', 'br_studenti' => 31),
	array('predmet' => 'Fizika', 'br_studenti' => 28),
	array('predmet' => 'Makedonski', 'br_studenti' => 12),
	array('predmet' => 'Programiranje', 'br_studenti' => 11),
	array('predmet' => 'Matematika', 'br_studenti' => 10),
	array('predmet' => 'Hemija', 'br_studenti' => 5),
);

*/


//niza za domashno
$predmeti =  array(
	array('predmet' => 'Matematika', 'br_studenti' => 10),
	array('predmet' => 'Makedonski', 'br_studenti' => 12),
	array('predmet' => 'Fizika', 'br_studenti' => 28),
	array('predmet' => 'Programiranje', 'br_studenti' => 11),
	array('predmet' => 'Hemija', 'br_studenti' => 5),
	array('predmet' => 'Biologija', 'br_studenti' => 31),
);
//kraj na niza za domashno

$sobirok = 0;

foreach($predmeti as $predmet){
	$sobirok += $predmet['br_studenti'];
}

echo 'Sredna vrednost na zapishani studenti po predmet: '.$sobirok / count($predmeti);

?>