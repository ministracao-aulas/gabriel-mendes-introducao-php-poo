<?php

class Strings
{
    public static function lower(string $string)
    {
        return strtolower($string);
    }

    protected function chequeEspecial()
    {
        return 100;
    }

    protected function poupanca()
    {
        return 100;
    }

    protected function contaCorrente()
    {
        return 300;
    }

    public function saldoTotal()
    {
        $cheque_especial = $this->chequeEspecial();
        $conta_corrente  = $this->contaCorrente();
        $poupanca        = $this->poupanca() ;

        return $cheque_especial + $conta_corrente + $poupanca;
    }
}