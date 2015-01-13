<?php

class Amigo {
    public $idamigos;
    public  $nome;
    public  $telefone_fixo;
    public  $telefone_celular;
    public  $email;
    public  $endereco;
    
    function getIdamigos() {
        return $this->idamigos;
    }

    function setIdamigos($idamigos) {
        $this->idamigos = $idamigos;
    }

        
    function getNome() {
        return $this->nome;
    }

    function getTelefone_fixo() {
        return $this->telefone_fixo;
    }

    function getTelefone_celular() {
        return $this->telefone_celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone_fixo($telefone_fixo) {
        $this->telefone_fixo = $telefone_fixo;
    }

    function setTelefone_celular($telefone_celular) {
        $this->telefone_celular = $telefone_celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}

