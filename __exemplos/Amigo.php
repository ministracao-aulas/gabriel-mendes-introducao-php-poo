<?php

/*
    Se é amigo empresta dinheiro

    Qualquer pessoa pode ficar sabendo as horas
*/

class Pessoa
{
    private static $amizade = false;

    public static function queHorasSao()
    {
        echo "São ". date('H'). " horas e ". date('i')." minutos".PHP_EOL;
    }

    public function meEmpresta(bool $amigo = false)
    {
        if(!$amigo)
            if(!self::$amizade)
            {
                echo "Que isso cara, nem te conheço".PHP_EOL;
                return;
            }

        echo "Claro amigo".PHP_EOL;
    }

    public function formarAmizade()
    {
        self::$amizade = true;
    }

    public function romperAmizade()
    {
        self::$amizade = false;
    }
}

$pessoa = new Pessoa;

//Não é amigo
// $pessoa->queHorasSao();
// $pessoa->meEmpresta();
// $pessoa->formarAmizade();
// $pessoa->meEmpresta();
// $pessoa->meEmpresta();
// $pessoa->romperAmizade();
// $pessoa->meEmpresta();
// $pessoa->queHorasSao();
// $pessoa->meEmpresta();

//Vai dar erro (não pode ser chamado estaticamente, precisa de um contexto/instância de classe)
// Pessoa::meEmpresta();

//Aqui pode ser chamado estaticamente
Pessoa::queHorasSao();
