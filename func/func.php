<?php
function teste(){
	echo "teste";
}

function lista(){
$servidor="localhost";
$banco="db_sispantur";
$usuario="root";
$senha="123456";

$db= new mysqli($servidor,$usuario,$senha,$banco);
$query=$db->query("SELECT * FROM tb_clients");
return $query;	
}