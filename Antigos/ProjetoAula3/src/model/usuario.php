<?php

class Usuario {

    private string $nome;
    private string $email;
    private string $senha;
    private string $genero;
    private $interesses = [];

    public function Usuario() {}

    //ReceberNOME
    public function setNome(string $nome) : void {
        $this->nome = $nome;
    }
    public function getNome() : string{
        return $this->nome;
    }
    //ReceberEMAIL
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    public function getEmail() : string{
        return $this->email;
    }
    //ReceberSENHA
    public function setSenha(string $senha) : void {
        $this->senha = $senha;
    }
    public function getSenha() : string{
        return $this->senha;
    }
    //ReceberGENERO
    public function setGenero(string $genero) : void {
        $this->genero = $genero;
    }
    public function getGenero() : string{
        return $this->genero;
    }
    //ReceberINTERESSES
    public function setInteresses(&$interesses) : void {
        $this->interesses = $interesses;
    }
    public function getInteresses() : array{
        return $this->interesses;
    }


}

?>