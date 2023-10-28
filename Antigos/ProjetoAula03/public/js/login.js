
$(document).ready(function(){


    //EVENTO DE CLICK DO BOTÃO SUBMIT DO FORMULÁRIO 

    //e = elemetnt (se refere ao próprio formulário)
    $(document).on('submit', "#frmLogin", function(e){

        e.preventDefault();
        //Serialize - Trata todos os dados em conjunto (do formulário) para envio na variável "dados"
        var dados = $('#frmLogin').serialize();
        
        if (validarCampos()){
            //ajax - usado para enviar dados armazenados quando o PHP é o back-end
            $.ajax({
                type: 'post',
                url: "../../src/controller/usuarioController.php",
                async: true,
                data: dados + "&" + $.param({
                    _action: "login"
                }),
                cache: true,
                success: function(url){
                    alert(url);
                }
            })
        }

    }); //Fim do Submit do Form

    //Função em Javascript para validar os campos do formulário - validarCampos
    function validarCampos(){

        var status = true; //vê se todos os campos estão vazios ou não

        $('.erromsg').remove();

        var login = $("#login");
        var senha = $("#senha");

        var erromsg = '<div class="erromsg">Preencha o campo <span></span></div>';

        //MENSAGEM PARA PREENCHER CAMPO *LOGIN*
        if(!login.val()){

            login.after(erromsg);
            login.next().find("span").text("Login");
            status = false;

        }

        //MENSAGEM PARA PREENCHER CAMPO *SENHA*
        if(!senha.val()){

            senha.after(erromsg);
            senha.next().find("span").text("Senha");
            status = false;

        }

        return status;

};
})
