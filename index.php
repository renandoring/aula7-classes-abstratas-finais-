<?php 
/*POLIMORFISMO -  QUNDO DUAS OU MAIS CLASSES TEM O MESMO NOME MAS PODEM SER USADAS PELO OBJETO SEM PROBLEMA*/
include_once "Animal.class.php";
include_once "Cao.class.php";
include_once "Gato.class.php";

$cao = new Cao();
$gato = new Gato();

$cao->dono = "Pedro";
$gato->raca = "Vira-Lata";

//Metodos
$cao->emitirSom();
$gato->emitirSom();
?>