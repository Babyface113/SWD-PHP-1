<?php 

class Student{
	private $ime;
	private $prezime;
	private $godina_na_ragjanje;
	private $fakultet;

	public function __construct($g, $f){
		$this->godina_na_ragjanje = $g;
		$this->fakultet = $f;
	}

	public function getInfo(){
		$o = $this->ime.' '.$this->prezime.' roden na '.$this->godina_na_ragjanje.' e zapishan na fakultetot '.$this->fakultet;
		return $o;
	}

	public function setIme($i){
		$this->ime = $i;
	}

	public function getIme(){
		return $this->ime;
	}

	public function setPrezime($p){
		$this->prezime = $p;
	}

	public function getPrezime(){
		return $this->prezime;
	}


}	





$s1 = new Student('1990-12-01', 'Computer Science');
// $s1->ime = 'Ilmi';
$s1->setIme('Ilmi');
// $s1->prezime = 'Ramadani';
$s1->setPrezime('Ramadani');
// $s1->godina_na_ragjanje = '1990-12-01';
// $s1->fakultet = 'Computer Science';

// $student_info = $s1->getInfo();
// echo $student_info;

// echo "<hr>";

// $prezime = $s1->getPrezime();
// echo $prezime;

print_r($s1);
?>