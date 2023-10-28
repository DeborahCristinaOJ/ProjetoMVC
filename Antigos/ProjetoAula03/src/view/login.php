<html>
    <head>
        <title> Login de Usuário </title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="../../public/css/login.css">
        <link rel="stylesheet" href="../../public/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="../../public/js/login.js"></script>
    </head>
    <body>

    <!--FORMULÁRIO DE LOGIN-->
    <div id="containerLogin">
        <form id="frmLogin" name="frmLogin" method="post"> 
        <!--<form id="" name="frmLogin" method="post" action="../controller/usuarioController.php"> -->
            <div class="div_icon">
                <img class="icon" src="../../public/img/user.png" alt="">
            </div>  
            <h4>Formulário de Login</h4><hr>          

          <p> 
            <label for="login">Seu Login</label>
            <input id="login" name="login" type="text" placeholder="login" />           
          </p>

          <p> 
            <label for="senha">Sua Senha</label>
            <input id="senha" name="senha" type="password" placeholder="ex. 1234"/>            
          </p>
           
          <p>  
            <input type="submit" name="btnLogin" value="Logar">
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>

    </body>
</html>