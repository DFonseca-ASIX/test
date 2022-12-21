<?php
session_start(); //Comença la sessió

$num=0;
if(isset($_SESSION['num'])){
    $num=$_SESSION['num'];
}

$_SESSION['num'] = ++$num;

echo $num;

?>