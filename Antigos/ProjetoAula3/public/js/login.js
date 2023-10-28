$(document).ready(function(){

    $(document).on("submit", "#formLogin", function(e){

        //var data = $("#formLogin").serialize();

        if(!validarCampos()){
            e.preventDefault();
        }
    });

    function validarCampos(){
        
        var status = true;

        //remove as mensagens de erro
        $('.erromsg').remove();

        //verifica se os campos foram preenchidos
        var usuario = $('usuario');
        var senha = $('senha');

        var erromsg = '<div class="erromsg">Preencha o campo <span></span></div>';

        if(!usuario.val()){
            usuario.after(erromsg);
            usuario.next().find("span").text("login");
            status = false;
        }

        if(!email.val()){
            email.after(erromsg);
            email.next().find("span").text("senha");
            status = false;
        }

        return status;
    }

});