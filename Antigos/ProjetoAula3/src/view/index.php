<!DOCTYPE html>
<html>
    <head>
        <title>Formulário de Contato</title>
        <script src="../../public/js/login.js"></script>
        <script src="jquery-3.6.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../../public/css/style.css" />
    </head>
    <body>
     
        <!--<form id="frmMensagem" method="post" action="">-->
        <form method="post" action="../controller/usuarioController.php">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            
            <label for="genero">Gênero:</label>
            <select id="genero" name="genero">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>
            
            <p>Interesses:</p>
            <input type="checkbox" name="interesses[]" value="Esporte">
            <label for="esporte">Esporte</label><br>
            
            <input type="checkbox" name="interesses[]" value="Artes">
            <label for="artes">Artes</label><br>
            
            <input type="checkbox" name="interesses[]" value="Tecnologia">
            <label for="tecnologia">Tecnologia</label><br>
            
            <input type="checkbox" name="interesses[]" value="Viagens">
            <label for="viagens">Viagens</label><br>

            <input type="submit" name="submit" value="Enviar">
            <!--<button type="button">Enviar</button>-->
        </form>

    </body>
</html>
