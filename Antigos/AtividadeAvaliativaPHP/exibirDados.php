   
   <?php

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $msg = $_POST['msg'];
       $checkbox = $_POST['hobby'];

    if(empty($nome) || empty($email) || empty($msg) || empty($checkbox))
    {
        echo "Preencha todos os campos!";
        exit();
    }
    else {

        echo "<h1>Mensagem Enviada:</h1>";
        echo "<br>\n Nome: " . $nome;
        echo "<br>\n Email: " . $email;
        echo "<br>\n Mensagem: " . $msg;
        echo "<br>\n Checados: " . $checkbox;
    }
    ?>


