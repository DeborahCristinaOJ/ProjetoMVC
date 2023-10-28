<!DOCTYPE html>
<html>
    <head>
        <title>Formulário de Contato</title>
        <link rel="stylesheet" href="../../public/css/home.css" />
        <link rel="stylesheet" href="../../public/css/style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="../../public/js/home.js"></script>
        
    </head >
    <body>
     
        <!--FORMULÁRIO DE MENSAGEM-->
        <form id="frmMensagem" name="frmMensagem" method="post" action="">

            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome">
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha">
            
            <label for="genero">Gênero:</label>
            <select id="genero" name="genero">
                <option value=""></option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>
            
            <div id="interesses">
                <p>Interesses:</p>
                <input type="checkbox" name="interesses[]" value="Esporte">
                <label for="esporte">Esporte</label><br>
                
                <input type="checkbox" name="interesses[]" value="Artes">
                <label for="artes">Artes</label><br>
                
                <input type="checkbox" name="interesses[]" value="Tecnologia">
                <label for="tecnologia">Tecnologia</label><br>
                
                <input type="checkbox" name="interesses[]" value="Viagens">
                <label for="viagens">Viagens</label><br>
            </div>

            <input type="submit" name="btnMensagem" value="Enviar">
        </form>

    </body>
</html>

