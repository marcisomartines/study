<?php
include 'func.php';
teste();
echo "<br>------------------------------<br>";
$teste=lista();
while($row=$teste->fetch_object()){
	echo $row->nome,"<br>";
}