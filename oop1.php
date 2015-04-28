<?php 

class Student{
	public $ime;

	public function pej(){
		echo "tra la la la la...";
	}
}

class Profesor{
	public function predavaj(){
		echo "bla bla bla bla...";
	}

	public function ocenuvaj(){
		echo "sedi 1!";
	}
}

$s = new Student;

$s->ime = 'Bojan';
$s->pej();


ocenuvaj();

$prof = new Profesor;
$prof->predavaj();
$prof->predavaj();
$prof->predavaj();
$prof->ocenuvaj();
$prof->ocenuvaj();
$prof->ocenuvaj();
?>