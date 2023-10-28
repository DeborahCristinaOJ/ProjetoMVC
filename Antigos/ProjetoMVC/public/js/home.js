$(document).ready(function() {

    $(document).on('submit', '#frmMensagem', function(e) {

        e.preventDefault();
        var data = $("#frmMensagem").serialize();

        if (validarCampos()) {

            $.ajax({
                type: 'post',
                url: '../../src/controller/usuarioController.php',
                async: true,
                data: data + "&" + $.param({
                    _action: "enviarMensagem"
                }),
                cache: true,
                success: function(url) {
                    
                    location.href = url.replace(/^\s+|\s+$/gm,'');

                }                            
            });
        }    
    });

    function validarCampos() {

        var status = true;

        // remove as mensagens de erro
        $(".erromsg").remove();

        // verificar se os campos foram preenchidos
        var nome = $("#nome");
        var email = $("#email");
        var senha = $("#senha");
        var genero = $("#genero");
        var interesses = $("#interesses");

        // Mensagem de erro padrão a ser inserida após o campo
        var erromsg = '<div class="erromsg">Preencha o campo <span></span></div>';

        if(!nome.val()){
            nome.after(erromsg);
            nome.next().find("span").text("nome completo");              
            status = false;
        }

        if(!email.val()){
            email.after(erromsg);
            email.next().find("span").text("email");
            status = false;
        }
        
        if(!senha.val()){
            senha.after(erromsg);
            senha.next().find("span").text("senha");
            status = false;
        }

        if(!genero.val()){
            genero.after(erromsg);
            genero.next().find("span").text("genero");
            status = false;
        }

        if(!$("input[type='checkbox']").is(":checked")) {
            interesses.after(erromsg);
            interesses.next().find("span").text("interesses");
            status = false;
        }

        return status;

    }

});
