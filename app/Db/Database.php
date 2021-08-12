<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{

    // host de conexão com banco de dados
    const HOST = 'localhost';

    // nome do banco de dados
    const NAME = 'wdev_vagas';
    
    // usuario do banco de dados
    const USER = 'root';

    //senha de acesso ao banco de dados;
    const PASS = 'Os40Oci@';

    // nome da tabela a ser manipulada
    private $table;

    //instancia de conexão com banco de dados tipo pdo
    private $connection;

    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }


    //metodo reponsavel por criar conexão com banco de dados
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            die('ERROR: '.$e->getMessage());
        }

    }


}

