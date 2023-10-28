<?php

    if ($_SERVER['HTTP_HOST'] != "") {

        // Obtém o nome do host (ex. localhost)
        $host = $_SERVER['HTTP_HOST'];

        // define o nome da página para a qual deverá ser redirecionado
        $page = "login.php";

        // chama a página login.php dentro da pasta /src/view
        //header("Location: http://" . $host . "/" . "PWebII/ProjetoMVC/src/view/" . $page);
        header("Location: http://" . $host . "/" . "/PWebII/ProjetoMVC/src/view/" . $page);

        exit();
    }
  
?>