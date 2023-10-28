<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index.html</title>

        <style>
            #area
            {
                position:relative;
                left:37%;
                top:29%;
                width:320px;
                height:270px;
            }

            #area #formulario
            {
                position:absolute;
                display:block;
            }

            fieldset
            {
                width:300px;
                height:430px;
            }

            legend
            {
                font-style:bold;
                font-family: "Segoe UI";
            }

            #formulario label
            {
                position:absolute;
                /*left:19px;*/
                margin-right:5px;
            }

            #formulario input.campo_nome
            {
                position:absolute;
                left:95px;
                top:23px;
                width:230px;
            }

            #formulario input.campo_email
            {
                position:absolute;
                left:95px;
                margin-top:2px;
                width:230px;
            }

            .btn_submit {
                margin-top: 5px;
            }
            
        </style>

    </head>
    <body>
        
        <div id="area">
            <form id="formulario" action="exibeDados.php" method="post">
            <fieldset>
                <legend>Formulário</legend>
                
                <label>Nome:</label><input class="campo_nome" name="nome" type="text"><br><div style="padding: 5px;"></div>
                
                <label>Email:</label><input class="campo_email" name="email" type="email"><br><div style="padding: 5px;"></div>
                
                <label>Mensagem:</label><br><textarea class="msg" name="msg" cols="40" rows="8"></textarea><br><div style="padding: 5px;"></div>
                
                <div id="hobby">
                    <span>Interesses:</span><br>
                    <input type="checkbox" name="hobby[]" value="Esporte">
                    <label for="esporte">Esporte</label><br>
                    
                    <input type="checkbox" name="hobby[]" value="Artes">
                    <label for="artes">Artes</label><br>
                    
                    <input type="checkbox" name="hobby[]" value="Tecnologia">
                    <label for="tecnologia">Tecnologia</label><br>
                    
                    <input type="checkbox" name="hobby[]" value="Viagens">
                    <label for="viagens">Viagens</label><br>
                </div>

                <div style="padding: 5px;"></div>
                <label for="novidades">Receber novidades por e-mail?</label><br>
                <input type="checkbox" id="novidades" name="novidades" value="Sim"> Sim<br>

                <hr>
                <input class="btn_submit" type="submit" name="submit" value="Enviar">
            </fieldset>
            </form>
        </div>

    <?php

        $a = "10";
        $b = "20";
        echo $a.$b;



    ?>

    </body>
</html>