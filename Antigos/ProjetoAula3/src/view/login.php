<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <div id="containerLogin">
        <form id="formLogin" action="../controller/usuarioController.php" method="post">
            <br>
            <h4>Formulário de Login</h4>

            <p>
                <label for="">Usuário:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite um nome de usuário">
            </p>

            <p>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite uma senha forte">
            </p>

            <p>
                <input type="submit" name="btnLogin" value="Entrar">
            </p>
        </form>
    </div>

</body>
</html>