<?php

    class Config {

        // define as variaveis de acesso e conexao com o BD
        public $host = "localhost";
        public $username = "root";
        public $password = "admin";
        public $database = "db_cadastro_login";
        
        private $conn;
        
        public function __construct() {

            // verifica se a variavel esta definida e nao e nula
            if (!isset($this->conn)) {
                
                // prepara a conexao com o banco de dados
                $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database) or die("Falha na Conexão: %s\n". $this->conn -> error);
                
                // checa se a conexao com o banco de dados foi estabelecida
                if (!$this->conn) {
                    echo 'Não foi possível conectar ao servidor de Banco de Dados. Verifique os dados de sua conexão com o Banco de Dados.';
                    exit;
                }        
            }
        }    

        // retorna o objeto de conexao com o Banco de Dados
        public function getConn() {
            return $this->conn;
        }

        // fecha a conexão com o Banco de Dados
        public function fecharConn($conn) {
            $conn->close();
        }

    }
    
?>