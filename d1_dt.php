<?php 

$predmeti =  array(
	array('predmet' => 'Matematika', 'br_studenti' => 10),
	array('predmet' => 'Makedonski', 'br_studenti' => 12),
	array('predmet' => 'Fizika', 'br_studenti' => 28),
	array('predmet' => 'Programiranje', 'br_studenti' => 11),
	array('predmet' => 'Hemija', 'br_studenti' => 5),
	array('predmet' => 'Biologija', 'br_studenti' => 31),
);

function raspored ($a, $b){
	if($a['br_studenti'] < $b['br_studenti']){
		return 1;
	}
}

uasort($predmeti, 'raspored');
print_r($predmeti);

?>