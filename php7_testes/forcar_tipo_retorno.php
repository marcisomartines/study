<?php

function teste($x):int{//o retorno deve ser do tipo int
	return $x;
}

echo teste(2.99);//ele trunca o valor e mostra apenas a parte inteira

echo "\n\n";

function teste2($y = NULL):int{
	return $y;//não permite retornar null, deve sempre retornoar o tipo especificado
}

var_dump(teste2(2));

function teste3(int $w=NULL){
/*especifico o tipo do arqgumento que deve ser passado porem pode setar um valor padrão do argumento que seja diferente do tipo do argumento que foi especificado
se nenhum parametro for passa o php dispara um fatal error, setando um valor padrão evita esse erro
*/

	return $w;			
}

echo "\n\n";

var_dump(teste3());