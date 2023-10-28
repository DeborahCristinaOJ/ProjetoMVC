$(document).ready(function() {

    $(document).on('submit', '#frmLogin', function(e) {

        // interrompe a ação de refresh/atualização dos campos do formulário
        e.preventDefault();

        // serialize() retorna em forma de string todos os campos do formulário com seus respectivos valores
        var data = $("#frmLogin").serialize();

        // chama a função para verificarCampos() responsável por validar os campos nulos
        if (validarCampos()) {

            // envia os dados do formulário via método POST do AJAX para o PHP
            $.ajax({
                type: 'post',
                url: '../../src/controller/usuarioController.php',
                async: true,
                data: data + "&" + $.param({
                    _action: "realizarLogin"
                }),
                cache: true,
                success: function(dados) {
                    
                    // exibe na tela do retorno o comando echo do PHP
                    //alert(url);

                    //divide a string "dados" em um array de substrings com base em um delimitador específico (,¿)
                    var param =  dados.split(",¿");

                    //define as variaveis que irao receber os valores do array "param"
                    statusLogin = param[0];
                    url = param[1];

                    //verifica a variavel statusLogin (true/false)
                    if (statusLogin == 1) {

                        // Redireciona para uma nova página removendo os espaços vazios da string
                        location.href = url.replace(/^\s+|\s+$/gm,'');

                    }
                    else
                    {
                        //verificar se os campos foram preenchidos
                        var senha = $("#senha");
                        
                        // Mensagem de erro padrão a ser inserida após o campo
                        var erromsg = '<div class="erromsg">Usuário ou senha inválido!</div>';
                        
                        // Insere a mensagem de erro apos o campo input senha do formulário
                        senha.after(erromsg);
                    }

                }                            
            });
        }
    });

    // Função JAVASCRIPT para validar os campos do formulário HTML
    function validarCampos() {

        // Inicializa a variável status como verdadeiro/true
        var status = true;

        // remove as mensagens de erro
        $(".erromsg").remove();

        // verificar se os campos foram preenchidos
        var login = $("#login");
        var senha = $("#senha");
    
        // Mensagem de erro padrão a ser inserida após o campo
        var erromsg = '<div class="erromsg">Preencha o campo <span></span></div>';

        // Verifica se o campo login encontra-se vazio
        if(!login.val()){
            login.after(erromsg);
            login.next().find("span").text("login");              
            status = false;
        }

        // Verifica se o campo senha encontra-se vazio
        if(!senha.val()){
            senha.after(erromsg);
            senha.next().find("span").text("senha");
            status = false;
        }

        // retorna o valor da variável status
        return status;
    }

});


