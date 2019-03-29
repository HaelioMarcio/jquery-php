$(function(){

    //Todos os registros
    var carregarDados = function(){
        $.ajax({
            url: 'http://localhost:8080/request.php?request=AgendaIndex',
            method: 'GET',
            success: function(data){
                $('.lista').html(data);
            },
            beforeSend: function(){
            },
            complete: function(){
            }
        });
    }

    carregarDados();
    
    //Limpar Modal
    $('#modalCadastro').click(function(){
        $("#exampleModalLabel").html('Novo Contato');
        $("#formContato")[0].reset();
        $("#salvar").val('Salvar');
    });

    //Validaa Dados do Form
    $("#formContato").validate({
            rules: {
                nome: {
                    required: true,
                    minlength: 3,
                    
                },
                telefone: {
                    required: true,
                    minlength: 8,
                }
            },
            messages: {
                nome: {
                    required: "Por favor, digite seu nome",
                    minlength: "Informe acima de 2 caracteres."
                },
                telefone:{
                    required: "Por favor, informe seu telefone.",
                    minlength: "Telefone incompleto."
                }

            }
    });
    
    //Salva
    $('#formContato').submit(function(e){
        e.preventDefault();

        var dados = $('#formContato').serialize();
        
        $.ajax({
            url: 'http://localhost:8080/request.php?request=AgendaStore',
            data: dados,
            method: 'POST',
            success: function(data){
                $('.toast-body').html(data);
                $('#formContato')[0].reset();
                carregarDados();
            },
            beforeSend: function(){
               
            },
            complete: function(){

            }
        });

    });
    
    //Edita
    $(document).on("click", '#editar',function(e){
        
        e.preventDefault();
        var id = $(this).data("id");
        $.ajax({
            url: 'http://localhost:8080/request.php?request=AgendaExibir&id='+id,
            method: 'GET',
            data: id,
            success: function(data){
                $('.toast-body').html(data);
                
                var dado = JSON.parse(data);
                var obj = dado[0];
                
                $("#nome").val(obj.nome);
                $("#telefone").val(obj.telefone);
                $("#salvar").val('Atualizar');
                $("#exampleModalLabel").html('Edição de Contato - '+obj.nome);
                $('#modalCadastro').modal('show');
                carregarDados();
            },
            beforeSend: function(){
               
            },
            complete: function(){
                
            }
        });

    });

    //Deleta
    $(document).on("click", '#deletar',function(e){
        e.preventDefault();
        
       
        var id = $(this).data("id");
        console.log(id);
        $.ajax({
            url: 'http://localhost:8080/request.php?request=AgendaDelete&id='+id,
            method: 'GET',
            data: id,
            success: function(data){
                $('.toast-body').html(data);
                console.log(data);
                
                carregarDados();
            },
            beforeSend: function(){
               
            },
            complete: function(){
                
            }
        });

    });


});