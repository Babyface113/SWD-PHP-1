<?php 

class File{

	private $fh;
	private $filename;

	public function __construct($file){
		$this->filename = $file;
		$this->fh = fopen($file, 'a+');
	}

	public function write($record){

		fwrite($this->fh, $record);
	}

	public function read(){

		// $size = filesize($this->filename);
		// rewind($this->fh);
		// return fread($this->fh, $size);
		return file_get_contents($this->filename);
	}

	public function close(){
		fclose($this->fh);
	}
}

$f = new File('imenik.txt');
$f->write('pero - 223305');
$f->write('janko - 332810');
echo $f->read();
$f->close();


?>