<?php

    include('../dao/usuarioDAO.php'); 
    include('../model/usuario.php'); 
    
    // Chama a ação de login com origem em uma requisição ajax no arquivo javascript
    if ($_POST['_action'] == "realizarLogin") {

        // armazena os valores dos campos do formulário nas respectivas variaveis
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        // Cria um objeto da classe Usuario
        $u = new Usuario();

        // Seta os valores dos atributos da classe Usuario
        $u->setLogin($login);
        $u->setSenha($senha);

        // Cria um objeto da classe USUARIODAO
        $uDAO = new UsuarioDAO();

        // Chama o método realizarLogin() da classe UsuarioDAO
        $status = $uDAO->realizarLogin($u);

        // Se verdadeiro / TRUE
        if ($status) {

            // Converte o objeto em string
            //$dados_serializados = serialize($u);

            // Codificar os dados serializados para que possam ser passados na URL
            //$dados_codificados = urlencode($dados_serializados);
            
            //retorna para o javascript a string com o status de login e a url da nova pagina
            //echo (int) $status . ",¿" . trim("../view/home.php?dados=".$dados_codificados);
            //echo (int) $status . ",¿" . trim("../view/admin.php?dados=".$dados_codificados);

            echo (int) $status . ",¿" . trim("../view/admin.php");
            exit;
        }
        else
        {
            //retorna para o javascript a string com o status de login e a url da pagina NULL
            echo (int) $status . ",¿" . null;
            exit;
        }
         
    }

    // Chama a ação de login com origem em uma requisição ajax no arquivo javascript
    if ($_POST['_action'] == "listarUsuarios") {

        // cria um objeto da classe UsuarioDAO
        $uDAO = new UsuarioDAO();
       
        /* 
        chama o metodo listarUsuarios() da classe usuarioDAO
        cria uma variavel para armazenar a lista de objetos 
        */
        $listaUsuarios = $uDAO->listarUsuarios();
        //echo json_encode($uDAO->listarUsuarios());

        $tblUsuarios = null;

        if(empty($listaUsuarios)) {

            $tblUsuarios .= "<tr>";
            $tblUsuarios .= "<td colspan='6'>Nenhum resultado encontrado.</td>";
            $tblUsuarios .= "<tr>";
            
        } else {
            foreach($listaUsuarios as $value) {
                    
                $tblUsuarios .= "<tr>";
                $tblUsuarios .= "<td>". $value->id . "</td>";
                $tblUsuarios .= "<td>". $value->nome . "</td>";
                $tblUsuarios .= "<td>". $value->email . "</td>";
                $tblUsuarios .= "<td>". $value->login . "</td>";
                $tblUsuarios .= '<td><button id="btnEditarUsuario" type="button" class="edit-button" data-bs-toggle="modal" data-bs-target="#modalEditUsuario"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
            </svg></button></td>';
                $tblUsuarios .= "<td><button id='btnExcluirUsuario' class='remove-button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x' viewBox='2 2 12 12'>
                <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
            </svg></button></td>";

                $tblUsuarios .= "</tr>";

            }
        }

        echo $tblUsuarios;

    }

    // Chama a ação de login com origem em uma requisição ajax no arquivo javascript
    if ($_POST['_action'] == "salvarNovoUsuario") {

        // armazena os valores dos campos do formulário nas respectivas variaveis
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        // Cria um objeto da classe Usuario
        $u = new Usuario();

        // Seta os valores dos atributos da classe Usuario
        $u->setNome($nome);
        $u->setEmail($email);
        $u->setLogin($login);
        $u->setSenha($senha);

        // cria um objeto da classe UsuarioDAO
        $uDAO = new UsuarioDAO();

        $status = $uDAO->salvarNovoUsuario($u);

        // Se verdadeiro / TRUE
        if ($status) {           
            
            //variavel local para armazenar a mensagem de sucesso
            $msg = "Novo usuário salvo com sucesso!";

            //retorna para o javascript a string com o status de login e a url da nova pagina
            echo (int) $status . ",¿" . $msg;
            exit;
        }
        else
        {
            //retorna para o javascript a string com o status de login e a url da pagina NULL
            echo (int) $status . ",¿" . null;
            exit;
        }

        
    }        

    if ($_POST["_action"] == "excluirUsuario") {

        $idUsuario = $_POST["_idUsuario"];	

        $u = new Usuario();

        $u->setId($idUsuario);

    }
    
?>