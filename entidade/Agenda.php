<?php


class Agenda{

    private $id;
    private $nome;
    private $telefone;
    
    public function setId($id){
        $this->id = $id;
    }

    public function getId($id){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome($nome){
        return $this->nome;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone($telefone){
        return $this->telefone;
    }
    

}


?>