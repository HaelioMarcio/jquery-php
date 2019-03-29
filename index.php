<?php
    $uri = $_SERVER['REQUEST_URI'];
    $partes =  explode('/',$uri);
    print_r($partes);

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <meta charset="UTF-8" />
    </head>
    <body>
        
    <div class="container">
        <h3>Lista de Contatos</h3>
            
        <div class="row">
            <div class="col-md-6">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="">Pesquisar:</label>
                        <input type="text" class="form-control" name="busca" placeholder="..." />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Buscar" class="btn btn-primary" />
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCadastro" data-whatever="@mdo">Novo Contato</button>
            </div>
        </div>
            <div class="lista"></div>
        </div>

        <!-- Modal -->

        <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Contato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formContato">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholde="José Maria" autofocus>  
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Telefone:</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(00) 00000-0000">
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="Fechar" />
                <input type="submit" id="salvar" class="btn btn-primary" value="Salvar" />
            </div>
            </form>
            </div>
        </div>
        </div>
       
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
