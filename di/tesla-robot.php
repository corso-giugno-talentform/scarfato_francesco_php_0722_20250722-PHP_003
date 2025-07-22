<?php
abstract class ArtoSuperiore {}
abstract class ArtoInferiore {}


class Mano extends ArtoSuperiore
{}

class Piede extends ArtoInferiore
{}

class TeslaRobot
{
    public $nome;
    public $mani;
    public $piedi;

    public function __construct(string $nome, ArtoSuperiore $mani, ArtoInferiore $piedi)
    {
        $this->nome = $nome;
        $this->mani;
        $this->piedi;
    }
}