<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 14/04/2017
 * Time: 21:46
 */
class Conecta implements IConexao
{
    private $host;
    private $db;
    private $usuario;
    private $senha;

    public function __construct($host,$db,$usuario,$senha)
    {
        $this->host     = $host;
        $this->db       = $db;
        $this->senha    = $senha;
        $this->usuario  = $usuario;
    }

    public function conexao(){
        try{
            return new PDO("mysql:host={$this->host};dbname={$this->db}",$this->usuario,$this->senha);
        }catch(PDOException $e){
            echo "Erro ao conectar ao banco de dados. ".$e->getMessage();
        }
    }
}