<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga{

    // variavel tipo inteiro
    public $id;

    //variavel do tipo varchar
    public $titulo;
    
    //variavel do tipo varchar pode conter html
    public $descricao;
    
    //verifica vaga ativa (s/n)
    public $ativo;
    
    //data da publicação da vaga
    public $data;

    //metodo responsabel por cadastrar uma nova vaga no banco
    public function cadastrar(){
       
        //definir a data
        $this->data = date('Y-m-d H:i:s');
        
        //inserir a vaga no banco
        $obDatabase = new Database('vagas');
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;


        //atribuir o id da vaga na instancia

        //retornar sucesso
    }

}