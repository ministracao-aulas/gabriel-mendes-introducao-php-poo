<?php

class Pessoa
{
    protected $nome;
    protected $data_nascimento;
    private $sexo = 'M';

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setData(string $data_nascimento)
    {
        $this->data = $data_nascimento;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getSexoPessoa()
    {
        return $this->sexo;
    }
}

// $pessoa = new Pessoa;

// $pessoa->setNome('Gabriel');
// echo $pessoa->getNome();