<?php 

abstract class MotornoVozilo{
	protected $tip_na_motor;
	protected $broj_na_trkala;
	protected $kw;
}

abstract class Avtomobil extends MotornoVozilo{

	protected $br_vozdushni_pernichinja;
}

interface iAvtomobil{
	public function pali();
}

class BMW extends Avtomobil implements iAvtomobil{
	protected $model;

	public function setTipNaMotor($i){
		$this->tip_na_motor = $i;
	}

	public function getTipNaMotor(){
		return $this->tip_na_motor;
	}

	public function setBrojNaTrkala($i){
		$this->broj_na_trkala = $i;
	}

	public function getBrojNaTrkala(){
		return $this->broj_na_trkala;
	}

	public function setKw($i){
		$this->kw = $i;
	}

	public function getKw(){
		return $this->kw;
	}

	public function setBrNaVozdushniPernichinja($i){
		$this->br_vozdushni_pernichinja = $i;
	}

	public function getBrNaVozdushniPernichinja(){
		return $this->br_vozdushni_pernichinja;
	}

	public function setModel($i){
		$this->model = $i;
	}

	public function getModel(){
		return $this->model;
	}

	public function pali(){
		echo "brm brm brm!";
	}
}

$bmw = new BMW;
$bmw->setModel('X5');
$bmw->setKw(400);
$bmw->pali();

echo "<pre>";
print_r($bmw);
echo "</pre>";



?>