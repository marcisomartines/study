<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 22/04/2017
 * Time: 18:45
 */

Class Teste{

    public function exemplo($valor){
        try{

            if($valor != 1)
                throw new Exception('exception');

            if($valor != 2)
                throw new Error('error');

        }catch(Error | Exception $e){
            echo "pegou". $e->getMessage();
        }
    }
}

$teste = new Teste();

$teste->exemplo(2);