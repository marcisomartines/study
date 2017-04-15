<?php
try{
    $dsn = 'mysql:host=localhost;dbname=pantanal_sis';
    $conn = new PDO($dsn,'root','123456');
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,true);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//    $insert = "INSERT INTO tb_clients (nome) VALUES('teste pdo')";
//
//    $resultadoInsert = $conn->exec($insert);//comando exec retorna o numero de linhas afetadas
//
//    echo '<pre>';
//    print_r($resultadoInsert);

    echo '<pre>';

//    $query = "select * from tb_clients limit 2";

//    $resultado = $conn->query($query);//retorna um objeto

//    print_r($resultado);//retorna um objeto

//    $list = $resultado->fetchAll();
//    $list = $resultado->fetchAll(PDO::FETCH_ASSOC);
//    $list = $resultado->fetchAll(PDO::FETCH_BOUND);
//    $list = $resultado->fetchAll(PDO::FETCH_OBJ);

//    print_r($list);

//    while($linha = $resultado->fetch()){
//        print_r($linha);
//    }

//    foreach ($conn->query($query) as $res){
//        print_r($res);
//    }

    $query = "select * from tb_clients where id_clients= :id";

    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id',$_GET['id']);
    $stmt->execute();

    print_r($stmt->fetchAll());


}catch (PDOException $e){
    echo 'Erro ao conectar: '.$e->getMessage();
}