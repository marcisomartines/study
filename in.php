<?php
require_once 'config.php';
echo "passou aqui<br>";
$sql="INSERT INTO tb_clients (nome,cidade,telefone,rg) VALUES ('".$_POST['nome']."','".$_POST['cidade']."','".$_POST['telefone']."','".$_POST['rg']."')";

$query=$db->query($sql);

echo $db->insert_id;

echo "------<br>";
$sql2="SELECT MAX(id_clients) as id_clients FROM tb_clients";

$client=$db->query($sql2);

$cliente=$client->fetch_object();

echo $cliente->id_clients;