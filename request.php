<?php

require 'controller/AgendaController.php';
$agendaController = new AgendaController();

    if($_GET['request'] == 'AgendaIndex'){
        print_r($agendaController->index());
    } else if($_GET['request'] == 'AgendaStore'){
        
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $request = (object) $_REQUEST;
        $agendaController->store($request);
        
    } else if($_GET['request'] == 'AgendaDelete') {
        $request = (object) $_REQUEST;
        $agendaController->delete($request);
    } else if($_GET['request'] == 'AgendaExibir') {
        
        $request = (object) $_REQUEST;
        $agendaController->exibir($request);

    }else {

    }

?>