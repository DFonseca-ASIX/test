<?php
$comptador=0;
if($fd = fopen('counter.txt','r')){
    $comptador=fgets($fd);
}
fclose($fd);

$fd2 = fopen('counter.txt','w');
$comptador=$comptador+1;
fwrite($fd2,$comptador);
fclose($fd2);

echo $comptador;