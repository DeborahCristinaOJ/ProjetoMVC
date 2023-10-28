<?php

    include('../config/config.php'); 
    //include('../model/usuario.php'); 

    class UsuarioDAO {

        public function realizarLogin(usuario $u) : bool {
                
                //armazena os dados de login e senha com origem no objeto de usuario $u enviado no parametro do metodo realizarLogin()
                $login = $u->getLogin();
                $senha = $u->getSenha();

                //cria a variavel de controle de status para verificar o retorno da consulta no BD
                $status = false;

                //armazana a query de consulta ao BD na variavel $sql
                $sql = "SELECT * FROM USUARIO WHERE LOGIN = '$login' AND SENHA = '$senha'";
                    
                //cria um objeto de conexao com o BD
                $DBConnection = new config();
                
                //armazena na variavel $conn o retorno da conexao com BD
                $conn = $DBConnection->getConn();
                    
                //executa a query no BD por meio da variavel $conn (conexao) com o BD
                $result = $conn->query($sql);

                //verifica se existe na tabela USUARIO do BD, algum registro com as informacoes de LOGIN e SENHA informados
                if ($result->num_rows == 1) {

                    //variavel $status recebe true
                    $status = true;                    
                    
                }

                //fecha a conexão com o Banco de Dados
                $DBConnection->fecharConn($conn);

                //retorna a variavel $status para a funcao que a chamou
                return $status;
        }

        public function listarUsuarios() : array {

            //armazana a query de consulta ao BD na variavel $sql
            $sql = "SELECT * FROM USUARIO";
                    
            //cria um objeto de conexao com o BD
            $DBConnection = new config();
                
            //armazena na variavel $conn o retorno da conexao com BD
            $conn = $DBConnection->getConn();
                    
            //executa a query no BD por meio da variavel $conn (conexao) com o BD
            $result = $conn->query($sql);

            //declara uma variavel do tipo array
            $listaDeObjetos = array();

            // 4. Verificar se há resultados e criar uma lista de objetos
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    
                    //define um objeto em branco da classe padrão do C#
                    $objeto = new stdClass();
                    
                    //preenche os atributos da classe com as informacoes dos campos da tabela no BD
                    $objeto->id = $row["id"];
                    $objeto->nome = $row["nome"];
                    $objeto->email = $row["email"];
                    $objeto->login = $row["login"];        
                    
                    //adiciona o objeto a lista
                    $listaDeObjetos[] = $objeto;
                }
            } 

            //fecha a conexão com o Banco de Dados
            $DBConnection->fecharConn($conn);

            //retorna um array com todos os usuario da tabela do banco
            return $listaDeObjetos;

        }

        public function salvarNovoUsuario(Usuario $u) : bool {

            $nome = $u->getNome();
            $email = $u->getEmail();
            $login = $u->getLogin();
            $senha = $u->getSenha();

            $status = false;
            
            $sql = "INSERT INTO USUARIO (nome, email, login, senhas) 
            VALUES ('".$nome."', '".$email."', '".$login."', '".$senha."')";

            $DBConnection = new config();

            $conn = $DBConnection->getConn();

            $result = $conn->query($sql);

            if($result) {
                $status = true;
            }

            $DBConnection->fecharConn($conn);

            return $status;

        }

    }

?>