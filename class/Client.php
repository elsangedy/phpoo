<?php

class Client
{
    public $name;
    public $cpf;
    public $rg;
    public $address;
    public $phone;

    public function __construct($name, $cpf, $rg, $address, $phone)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->address = $address;
        $this->phone = $phone;
    }
}