<?php

    if ($_SERVER['HTTP_HOST'] != "") {

        $host = $_SERVER['HTTP_HOST'];

        $page = "login.php";
        header("Location: http://" . $host . "/" . "../PWebII/ProjetoAula03/src/view/" . $page);

        exit();
    }
  
?>