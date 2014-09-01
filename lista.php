<?php
require_once 'config.php';
$id_tour=$_POST['tour'];

$query=$db->query("SELECT * FROM tb_tour
				   JOIN tb_cars on tb_cars.id_cars=tb_tour.id_car 
				   WHERE id_tour=".$id_tour);
$row=$query->fetch_object();
if($row->nr_poltrona==42){
	include 'vw_onibus42.php';
}
if($row->nr_poltrona==44){
	include 'vw_onibus44.php';
}