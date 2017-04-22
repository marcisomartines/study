<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 22/04/2017
 * Time: 19:16
 */

interface MinhaInterface extends Throwable{}

Class MinhaExcessao extends Exception implements MinhaInterface{}

function teste(int $a,int $b){

    if($a < 0)
        throw new MinhaExcessao("primeiro valor menor que zero");

    if($b < 0)
        throw new MinhaExcessao("segundo valor menor que zero");

    return $a+$b;
}

try{
    echo teste(0,-1);
}catch(Exception $e){
    echo "Excessão: ".$e->getMessage();
}