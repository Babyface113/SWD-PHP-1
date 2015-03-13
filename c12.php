<?php 

//otvoranje fajl vo php
$fh = fopen('imenik.txt', 'a+');
//fh - file handler
// echo $fh;

fwrite($fh, 'Zdravo Ardi!');

$size = filesize('imenik.txt');

rewind($fh);

$output = fread($fh, $size);

echo $output;

?>