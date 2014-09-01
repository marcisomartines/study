<?php
require_once 'config.php';
$teste=$db->query("SELECT * FROM tb_clients");

$teste2=$teste->fetch_object();
var_dump($teste2);
?>

<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<table class="table table-bordered table-hover table-striped tablesorter">
	<tr>
		<td class="success">
		<form method="post" action="reserva.php">
				<input type="hidden" name="nr_poltrona" value="1" />
				<input type="hidden" name="id_tour" value="$_POST['id_tour'] ?>" />
				<input type="submit" class="btn btn-success btn-xs pull-right" value="01">
			</form>
		</td>
		<td class="success">2</td>
		<td rowspan=12 align="center">CORREDOR</td>
		<td class="success">4</td>
		<td class="success">3</td>
	</tr>
	<tr>
		<td class="success">5</td>
		<td class="success">6</td>
		<td colspan="2" align="center">GELADERIA</td>
	</tr>
	<tr>
		<td class="success">7</td>
		<td class="success">8</td>
		<td colspan="2" align="center">ESCADA</td>
	</tr>
	<tr>
		<td class="success">9</td>
		<td class="success">10</td>
		<td class="success">12</td>
		<td class="success">11</td>
	</tr>
	<tr>
		<td class="success">13</td>
		<td class="success">14</td>
		<td class="success">16</td>
		<td class="success">15</td>
	</tr>
	<tr>
		<td class="success">17</td>
		<td class="success">18</td>
		<td class="success">20</td>
		<td class="success">19</td>
	</tr>
	<tr>
		<td class="success">21</td>
		<td class="success">22</td>
		<td class="success">24</td>
		<td class="success">23</td>
	</tr>
	<tr>
		<td class="success">25</td>
		<td class="success">26</td>
		<td class="success">28</td>
		<td class="success">27</td>
	</tr>
	<tr>
		<td class="success">29</td>
		<td class="success">30</td>
		<td class="success">32</td>
		<td class="success">31</td>
	</tr>
	<tr>
		<td class="success">33</td>
		<td class="success">34</td>
		<td class="success">36</td>
		<td class="success">35</td>
	</tr>
	<tr>
		<td class="success">37</td>
		<td class="success">38</td>
		<td class="success">40</td>
		<td class="success">39</td>
	</tr>
	<tr>
		<td class="success">41</td>
		<td class="success">42</td>
		<td colspan="2">BANHEIRO</td>
	</tr>
</table>