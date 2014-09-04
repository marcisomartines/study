<?php
require_once 'config.php';
echo "passou aqui<br>";
$sql="INSERT INTO tb_clients (nome,cidade,celular,rg) VALUES ('".$_POST['nome']."','".$_POST['cidade']."','".$_POST['telefone']."','".$_POST['rg']."')";

$query=$db->query($sql);

$id_client=$db->insert_id;

$reserva="INSERT INTO tb_reservs (nr_poltrona, tipo, id_tour, id_client,loc_embarque) VALUES ('".$_POST['nr_poltrona']."','d','".$_POST['id_tour']."','".$id_client."','RESERVA FEITA PELO SITE')";

$query=$db->query($reserva);

header ('Location: index.php');