<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 15/04/2017
 * Time: 11:54
 */

$mysqli = new mysqli('localhost','root','123456','pantanal_sis');

$sql = "select * from tb_clients limit 10";

if(!mysqli_real_query($mysqli,$sql)){
    echo "ERRO AO CONECTAR AO BANCO DE DADOS";
    die();
}

if($resultado = mysqli_store_result($mysqli)){
    while($linha = mysqli_fetch_assoc($resultado)){
        echo $linha['nome']."<br>";
    }
    mysqli_free_result($resultado);
}