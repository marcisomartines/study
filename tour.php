<?php
require_once 'config.php';
$query=$db->query("SELECT * FROM tb_tour 
				   JOIN tb_viagem on tb_viagem.id_viagem=tb_tour.id_viagem
					WHERE status='A' AND tipo='v' ORDER BY data_saida");
?>
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<?php
while($row=$query->fetch_object())
{
	?>
	<input type="radio" name="tour" value="<?=$row->id_tour?>"><?=$row->destino?> - <?=$row->data_saida?><br>
	<?php
}
?>