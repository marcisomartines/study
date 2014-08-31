<?php
$servidor="localhost";
$banco="db_sispantur";
$usuario="root";
$senha="123456";

$db= new mysqli($servidor,$usuario,$senha,$banco);
$query=$db->query("SELECT * FROM tb_clients");

while($row=$query->fetch_object()){
	echo $row->nome."<br>";
}