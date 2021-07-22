<?php

class Atributos
{
    /*
        nome    | email     | ativo     | tipo
        Tiago   |  t@t.com  | 0         | 2

        SIM 1
        NAO 0


        admin     = 1
        user      = 2
        manager   = 3
        client    = 4

        order by ativo
    */
    const DEVEDOR   = 'Devedor';
    const ADMIN     = 1;
    const USER      = 2;
    const MANAGER   = 3;
    const CLIENT    = 4;


    const JUROS = [
        'aa' => '3%',
        'am' => '1.2%',
    ];

    public static $juros = [
        'aa' => '3%',
        'am' => '1.2%',
    ];

    protected $nome             = 'Gabriel';
    protected $conta_corrente   = '100.00';
    protected $conta_poupanca   = '80.00';
    protected $cheque_especial  = '50.00';
    protected $emprestimo       = '30.00';

    public function getNome()
    {
        return $this->nome;
    }

    public function getSaldo()
    {
        return
        "Nome: ". $this->nome.PHP_EOL.
        "Conta_corrente: ". $this->conta_corrente.PHP_EOL.
        "Conta_poupanca: ". $this->conta_poupanca.PHP_EOL.
        "Cheque_especial: ". $this->cheque_especial.PHP_EOL;
    }

    public function getTotalSaldo()
    {
        return
        $this->conta_corrente +
        $this->conta_poupanca +
        $this->cheque_especial;
    }

    public function getAdmins()
    {
        return User::whereIn('tipo', [self::USER, self::ADMIN]);

        /*
        select * from users
        where tipo in (1, 2)

        tipo 1
        tipo 2
        tipo 3
        tipo 1
        tipo 4
        tipo 2
        */
    }
}

// echo (new Atributos)->getNome();
// echo (new Atributos)->getSaldo();
// echo (new Atributos)->getTotalSaldo();

// $conta = new Atributos;
// echo $conta->emprestimo;
// var_dump($conta->juros);
// var_dump(Atributos::$juros);
// var_dump(Atributos::DEVEDOR);
// print_r([Atributos::USER, Atributos::ADMIN]);
print_r(Atributos::JUROS);
