<?php 

$size = filesize('counter3.txt');
$fh = fopen('counter3.txt', 'r');
$current = fread($fh, $size);
fclose($fh);

echo $current++;

$fh1 = fopen('counter3.txt', 'w');
fwrite($fh1, $current++);



?>