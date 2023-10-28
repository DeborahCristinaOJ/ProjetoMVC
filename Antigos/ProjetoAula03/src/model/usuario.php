<?php
   
class Usuario {

    private string $nome;
    private string $login;
    private string $email;
    private string $senha;
    private string $genero;
    private $interesses = []; 

    //public function __construct(){}
    public function Usuario() {}

    public function setNome(string $nome): void {
        $this->nome = $nome;        
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function setLogin(string $login): void {
        $this->login = $login;        
    }

    public function getLogin() : string {
        return $this->login;
    }
    
    public function setEmail(string $email): void {
        $this->email = $email;        
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;        
    }

    public function getSenha() : string {
        return $this->senha;
    }

    public function setGenero(string $genero): void {
        $this->genero = $genero;        
    }

    public function getGenero() : string {
        return $this->genero;
    }

    //passagem de valor por referência e não por valor
    public function setInteresses(&$interesses): void {
        $this->interesses = $interesses;        
    }

    public function getInteresses() : array {
        return $this->interesses;
    }

}

?>