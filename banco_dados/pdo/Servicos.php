<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 14/04/2017
 * Time: 22:18
 */
class Servicos
{
    private $db;
    private $tabela;

    public function __construct(Conecta $db)
    {
        $this->db = $db->conexao();
    }

    public function listar(){
        $query = "select * from ".$this->getTabela();

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inserir(){
        $query = "insert into {$this->getTabela()} ('nome') values(:nome)";
        $stmt = $this->db->prepare($query);

        $stmt->bindValue(":nome","teste de nome");
        $stmt->execute();

        return $this->db->lastInsertId();
    }

    public function update(){
        $query = "update {$this->getTabela()} set nome=:nome where id_clients=:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome','novo nome');
        $stmt->bindValue(':id',5478);

        $res = $stmt->execute();
        return $res;
    }

    public function delete(){
        $query = "delete from {$this->getTabela()} where id=:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id',5478);
        $res = $stmt->execute();

        return $res;
    }

    public function procurar($id){
        $query = "select * from {$this->getTabela()} where id_clients=:id";
        $stmt =  $this->db->prepare($query);

        $stmt->bindValue(':id',$id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function setTabela($tabela){
        $this->tabela = $tabela;
    }

    public function getTabela(){
        return $this->tabela;
    }
}