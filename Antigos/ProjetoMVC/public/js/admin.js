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
        
        $('#modalNovoUsuario').modal('show');

    });

    $(document).on('submit', '#frmNovoUsuario', function(e) {

        //impedir que o comportamento padrão de um evento ocorra
        e.preventDefault();

        var dados = $('#frmSalvarNovoUsuario').serialize();
        
        //requisicoes a páginas PHP
        $.ajax({
            type: 'post',
            url: '../../src/controller/usuarioController.php',
            async: true,
            data: dados + "&" + $.param({
                _action: "salvarNovoUsuario"
            }),
            cache: true,
            success: function(dados) {

            },
            error: function(error) {
                console.error('Erro:', error);
            }
        });

    });

    $(document).on('click', '#btnEditarUsuario', function(e) {

        //requisicoes a páginas PHP
        $.ajax({
            url: '', 
            type: '', 
            dataType: 'html', 
            data: null,
            success: function(dados) {
                
            },
            error: function(error) {
                console.error('Erro:', error);
            }
        });

    });

    $(document).on('submit', '#frmEditUsuario', function(e) {
    
        //impedir que o comportamento padrão de um evento ocorra
        e.preventDefault();        

        //requisicoes a páginas PHP
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

        //requisicoes a páginas PHP
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

});


