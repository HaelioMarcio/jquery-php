<?php

require 'config/connection.php';
require 'entidade/Agenda.php';

class AgendaDAO{
    
    private $table = 'cad_pessoa';
    private $con;

    public function __construct(){
        $con = new Connection();
        $this->con = $con->getConnection();
    }

    public function index(){
        $query = 'SELECT * FROM '.$this->table;
        $statement = $this->con->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function store($request){
        
        $this->con->beginTransaction();
        $query = 'INSERT INTO '.$this->table.'(nome, telefone) VALUES (?,?)';
        $statement = $this->con->prepare($query);
        $statement->execute(array(
            $request->nome,
            $request->telefone,
        )); 
        
        $this->con->commit();
        print_r('Agenda Salva com Sucesso!');

    }
    public function exibir($id){
        $query = 'SELECT * FROM '.$this->table .' WHERE ID = '.$id;
        $statement = $this->con->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        print_r(json_encode($result));
        
    }
    public function update($request, $id){
        $query = 'UPDATE '.$this->table.' set where id = '.$id;
        return $query;
    }

    public function id($id){
        $query = 'SELECT * FROM '.$this->table.' where id = '.$id;
        return $query;
    }

    public function delete($id){
        $query = 'DELETE FROM '.$this->table.' where id = '.$id;
        $statement = $this->con->prepare($query);
        $statement->execute();
        print_r("Agenda Deletada com Sucesso");
        
    }

}


?>
