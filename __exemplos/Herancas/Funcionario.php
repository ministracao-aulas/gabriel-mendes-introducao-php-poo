<?php

require_once __DIR__.'/Pessoa.php';

class Funcionario extends Pessoa
{
    /*
        Reescrita do método setNome
    */

    public function setNome(string $outro_nome)
    {
        $this->nome = 'Alterado para: '. $outro_nome;
    }

    public function getNome()
    {
        return 'Nome: '. $this->nome;
    }

    public function getSexo()
    {
        return 'Sexo: '. $this->getSexoPessoa();
    }
}


$pessoa = new Funcionario;

$pessoa->setNome('Mateus');
// echo $pessoa->getNome();
echo $pessoa->getSexo();