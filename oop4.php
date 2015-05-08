<?php 

class Student{
	public static $ime;
	private static $prezime;

	const prva = 1;
	const vtora = 2;
	const treta = 3;
	const cetvrta = 4;

	public $godina;

	public static function setPrezime($p){
		self::$prezime = $p;
	}

	public static function getPrezime(){
		return self::$prezime;
	}
}

//scope
Student::$ime = 'Ilmi';
Student::setPrezime('Ramadani');
// Student::$godina = 4;

echo Student::$ime;
echo ' ';
echo Student::getPrezime();
echo ' ';
// echo Student::$godina;

$s = new Student;
$s->godina = Student::cetvrta;
echo $s->godina;

?>