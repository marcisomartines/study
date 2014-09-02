<?php
require_once 'config.php';

?>
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<form method="post" action="in.php">
<table class="table">
	<tr>
		<td width="100px"><label>Nome Completo: </label></td>
		<td><input type="text" id="nome" name="nome" required><br></td>
	</tr>
	<tr>
		<td><label>RG: </label></td>
		<td><input type="text" id="rg" name="rg" required><br></td>
	</tr>
</table>
<input type="submit" value="CADASTRAR" class="btn btn-primary">
</form>