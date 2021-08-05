<?php
declare(strict_types = 1);

require_once __DIR__ . "/Pessoa.php";
require_once __DIR__ . "/Funcionario.php";


$pessoa = new Funcionario();
$pessoa->setName("teo");
 echo $pessoa->getName();