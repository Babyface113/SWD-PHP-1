<?php 

$fh = fopen('counter2.txt', 'a+');
fwrite($fh, '|');
rewind($fh);

$size = filesize('counter2.txt');
$r = fread($fh, $size);
echo strlen($r);


?>