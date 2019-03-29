<?php

require 'dao/AgendaDAO.php';

class AgendaController{

    protected $agendaDAO;
    protected $agenda;

    public function __construct(){
        $this->agendaDAO = new AgendaDAO();
        $this->agenda = new Agenda();
    }

    public function index(){
        $result = $this->agendaDAO->index();
        
        $dados = '';
        foreach($result as $r){
            $dados .= '
                <tr>
                    <td>'.$r['id'].'</td>
                    <td>'.$r['nome'].'</td>
                    <td>'.$r['telefone'].'</td>
                    <td><a href="#" class="btn btn-primary" id="editar" data-id="'.$r['id'].'">Editar</a>
                    <a href="#" class="btn btn-danger" id="deletar" data-id="'.$r['id'].'">Deletar</a></td>
                </tr>
            ';
        }

        $table = '
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        
                        <th>Ações</th>
                    </tr>
                </thead>
                '.$dados.'
            </table>
        ';

        return $table;

    }

    public function store($request){
        $dados = $this->agendaDAO->store($request);       
    }

    public function exibir($request){
        $this->agendaDAO->exibir($request->id);
        
    }

    public function delete($request){
        $this->agendaDAO->delete($request->id);
    }
}

?>