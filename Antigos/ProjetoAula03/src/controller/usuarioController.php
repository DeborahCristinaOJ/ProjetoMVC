<?php

    if($_POST['_action'] == "login"){
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    echo $login ." ". $senha;

    }

?>