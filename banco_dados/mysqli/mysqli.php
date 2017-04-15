<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 14/04/2017
 * Time: 23:02
 */
//nao functiona
//try {
//    $mysqli = new mysqli('localhos', 'roo', '123456', 'pantanal_sis');
//}catch(Exception $e){
//    echo $e->getMessage();
//}
$mysqli = new mysqli('localhost', 'root', '123456', 'pantanal_sis');

if(mysqli_connect_errno()){
    echo "Erro ao conectar ".mysqli_connect_error();
    exit;
}

//$sql = "SELECT nome FROM tb_clients limit 10";
$nome='Marc';
$sql = "SELECT nome FROM tb_clients WHERE nome like '%{$mysqli->real_escape_string($nome)}%'";

if(!$mysqli->real_query($sql)){
    echo 'ERRO NA CONSULTA: '.$mysqli->error;
    die();
}

if($resulta = $mysqli->store_result()){
    while($linha = $resulta->fetch_object()){
        echo $linha->nome."<br>";
    }
    $resulta->close();
}
