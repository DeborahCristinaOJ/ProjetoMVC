<?php

    if(isset($_POST["btnLogin"])){

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $usuario = new usuario();
        $usuario->setNome($txtUsuario);
        $usuario->setSenha($txtSenha);

    }

?>