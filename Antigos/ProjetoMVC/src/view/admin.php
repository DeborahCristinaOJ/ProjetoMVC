<html>
    <head>
        <title> Administração de Usuários </title>
        
        <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css'>-->

        <link rel="stylesheet" href="../../public/css/admin.css">
        <link rel="stylesheet" href="../../public/css/style.css">

        <!-- Bootstrap CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

         <!-- Bootstrap Font Icon CSS CDN -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

         <!-- Bootstrap JS CDN -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

         <!-- jquery.min.js -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

         <!-- ADMIN.JS -->
         <script src="../../public/js/admin.js"></script>

    </head>
    <body>

        <section id="usuariosAdmin">
            
            <div class="row">
                <div class="col-md-12">
                    <br><h2>Listar Usuários</h2><button id="btnNovoUsuario" class="botao-novo">Novo</button>
                    <div id="msg" class="alert alert-success" role="alert"></div>
                </div>
                
                <div class="col-md-12">
                    <table id="tblUsuariosAdmin" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>E-mail</td>
                                <td>Login</td>
                                <td><em>Editar</em></td>
                                <td><em>Excluir</em></td>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>

        <!-- Modal Editar -->
        <div class="modal fade" id="modalEditUsuario" tabindex="-1" aria-labelledby="modalEditUsuarioLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditUsuarioLabel">Editar Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmEditUsuario" action="">

                    </form>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal Novo -->
        <div class="modal fade" id="modalNovoUsuario" tabindex="-1" aria-labelledby="modalNovoUsuarioLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalNovoUsuarioLabel">Editar Usuário</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="frmNovoUsuario" action="">

                            <!--<div id="msg" class="alert alert-success" role="alert"></div>-->
                            <label><strong>Id:</strong></label><br/>
                            <input type="text" id="id" name="id" value="" style="width:30%; pointer-events: none; background-color: #ddd;"><br/>
                            <label><strong>Nome:</strong></label><br/>
                            <input type="text" id="nome" name="nome" value="" style="width:100%"><br/>
                            <label><strong>Email:</strong></label><br/>
                            <input type="text" id="email" name="email" value="" style="width:100%"><br/>
                            <label><strong>Login:</strong></label><br/>
                            <input type="text" id="login" name="login" value="" style="width:100%">
                            <label><strong>Senha:</strong></label><br/>
                            <input type="password" id="senha" name="senha" value="" style="width:100%">
                            <hr/>
                            <button id="btnCancelarNovoUsuario" type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                            <button id="btnSalvarNovoUsuario" type="submit" class="btn btn-primary">Salvar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>