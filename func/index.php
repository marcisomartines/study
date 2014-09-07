<?php
include 'func.php';
teste();
echo "<br>------------------------------<br>";
/*$teste=lista();
while($row=$teste->fetch_object()){
	echo $row->nome,"<br>";
}
$teste=listarParametro('tb_clients');
while($row=$teste->fetch_object()){
	echo $row->nome,"<br>";
}*/
$teste=array("valor 1","valor 2","valor 3");
$criarTabela($teste);