<?php
require_once 'config.php';


?>
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<form method="post" action="in.php">
<table class="table">
	<tr>
		<td width="100px"><label>Nome Completo: </label></td>
		<td><input type="text" id="nome" name="nome" required><h6><font color="red">(obrigat&oacute;rio)</font></h6></td>
	</tr>
	<tr>
		<td><label>RG: </label></td>
		<td><input type="text" id="rg" name="rg" required><h6><font color="red">(obrigat&oacute;rio)</font></h6></td>
	</tr>
	<tr>
		<td><label>Telefone: </label></td>
		<td><input type="text" id="telefone" name="telefone" required><h6><font color="red">(obrigat&oacute;rio)</font></h6></td>
	</tr>
	<tr>
		<td><label>Cidade: </label></td>
		<td><input type="text" id="cidade" name="cidade" required><h6><font color="red">(obrigat&oacute;rio)</font></h6></td>
	</tr>
</table>
<input type="hidden" name="id_tour" id="id_tour" value="<?=$_POST['id_tour']?>">
<input type="hidden" name="nr_poltrona" id="nr_poltrona" value="<?=$_POST['nr_poltrona']?>">
<input type="submit" value="Concluir" class="btn btn-primary">
</form>