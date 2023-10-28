$(document).ready(function() {

    initPage();

    function initPage() {

        // Fazer uma requisição AJAX para o servidor PHP
        $.ajax({
            url: '../../src/controller/usuarioController.php', // URL do seu script PHP que fornece o objeto JSON
            type: 'POST', 
            dataType: 'html', 
            data: $.param({
                _action: "listarUsuarios"
            }),
            success: function(dados) {
             $("#tblUsuariosAdmin").find("tbody").html(dados);          

            },
            error: function(error) {
                console.error('Erro:', error);
            }
        });

    }

    $(document).on('click', '#btnNovoUsuario', function(e) {
        //abre a janela modal contendo o formulario de cadastro de novos usuario
        $('#modalNovoUsuario').modal('show');
    });

    $(document).on('submit', '#frmNovoUsuario', function(e) {

        e.preventDefault();

        //converte os dados do formulário em uma string e armazena na variavel data
        var data = $(this).serialize();

        //verifica se o botao salvar do formulario de edicao possui a classe .btnBlock responsavel pelo bloqueio do botao
        if (!$("#btnSalvarNovoUsuario").hasClass("btnBlock")) {       
            //adiciona ao classe .btnBlock para o bloqueio do botao salvar edicao do formulario de edicao     
            $("#btnSalvarNovoUsuario").addClass('btnBlock');
        }
        
        $.ajax({
            type: 'post',
            url: '../../src/controller/usuarioController.php',
            async: true,
            data: data + "&" + $.param({
                _action: "salvarNovoUsuario"
            }),
            cache: true,
            success: function(dados) {

                //array de atributos ou colunas da tabela
                var parametros = [];

                //divide a string "dados" em um array de substrings com base em um delimitador específico (,¿)
                var param =  dados.split(",¿");

                //define as variaveis que irao receber os valores do array "param"
                parametros['status'] = param[0];
                parametros['msg'] = param[1];

                //verifica a variavel statusLogin (true/false)
                if (parametros['status'] == 1) {

                    //fecha a janela modal de edicao do usuario
                    $('#modalNovoUsuario').modal('hide');
                    
                    //insere dentro da DIV mensagem de sucesso (id=#msg) a frase de sucesso enviada como parâmetro pela classe usuarioController.php
                    $("#msg").html(parametros['msg']);
                    
                    //chama a funcao fedeIn() do jquery responsável por exibir a DIV da mensagem com a mensagem de sucesso
                    $('#msg').fadeIn();

                    // Configurar um atraso para ocultar a mensagem após 2 segundos (2000 milissegundos)
                    setTimeout(function() {
                          //remove a classe btnBlock do botao editar do modal de edicao de dados do usuario
                          $('#usuariosAdmin #msg').fadeOut();
                    }, 2000);

                    //chama a função listar usuarios responsavel por atualizar a lista de usuarios da tabela no BD
                    initPage();
                }

            },
            error: function(error) {
                console.error('Erro:', error);
            }
        });

    });

    $(document).on('click', '#btnEditarUsuario', function(e) {

        //requisicoes do lado servidor
        $.ajax({
            url: '', 
            type: '', 
            dataType: '', 
            data: null,
            success: function(dados) {
                
            },
            error: function(error) {
                console.error('Erro:', error);
            }
        });

    });

    $(document).on('submit', '#frmEditUsuario', function(e) {           

        //requisicoes do lado servidor
        $.ajax({
            type: '',
            url: '',
            async: true,
            data: null,
            cache: true,
            success: function(dados) {            

            },
            error: function(error) {
                console.error('Erro:', error);
            }
        });

    });

    $(document).on('click', '#btnExcluirUsuario', function(e) {

        var $idUsuario = $(this).parent().parent().find('td').html();

        //requisicoes do lado servidor
        $.ajax({
            url: '../../src/controller/usuarioController.php', 
            type: 'post', 
            dataType: 'html', 
            data: $.param({
                _action: "excluirUsuario",
                _idUsuario: idUsuario
            }),
            success: function(dados) {                
                
            },
            error: function(error) {
                console.error('Erro:', error);
            }
        });

    });




});


