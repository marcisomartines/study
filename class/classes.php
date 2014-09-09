<?php
class teste{
	function teste($parametro){
		echo "Parametro passado: $parametro <br>";
	}

	var $atributo;
	function soma($par1, $par2){
		$this->atributo=$par1+$par2;
		return $this->atributo;
	}
}

class f extends teste{

}