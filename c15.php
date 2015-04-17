<?php 

class Flomaster{
	//properties
	private $boja = 'crna';
	private $visina = 18;
	private $shirina = 2;

	//methods
	public function setBoja($b){
		$this->boja = $b;
	}

	public function setVisina(){
		$this->visina = 25;
	}

	public function setShirina(){
		$this->shirina = 1.5;
	}

	public function getBoja(){
		return $this->boja;
	}

	public function getVisina(){
		return $this->visina;
	}

	public function getShirina(){
		return $this->shirina;
	}
}


//objekti od tip flomaster
//instanci of klasa flomaster
$f1 = new Flomaster;
$f1->setVisina();

$f2 = new Flomaster;
// $f2->boja = 'crvena';
$f2->setBoja('crvena');
$f2->setShirina();

$f1->setBoja('ciklama');


// echo $f1->boja;
echo $f1->getBoja();

// print_r($f1);
// print_r($f2);
?>