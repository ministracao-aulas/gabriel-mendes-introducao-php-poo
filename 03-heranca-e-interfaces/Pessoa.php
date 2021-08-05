<?php
require_once __DIR__ . "/InterfacePessoa.php";

class Pessoa implements InterfacePessoa
{
    protected $age;
    protected $name;
    const SEX = "M";

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}
