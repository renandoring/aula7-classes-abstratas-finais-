<?php 
//Classes finais nao podem ter outra classe herdando ela ... tipo alguma classe herdando classe gato
final class Gato extends Animal{
	public $raca;

	//Metodo Implementado da Classe Animal
	function emitirSom(){
		echo "O gato esta miando."."\n";
	}
}
?>