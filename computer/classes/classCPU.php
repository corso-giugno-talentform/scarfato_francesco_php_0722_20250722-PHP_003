<?php

class CPU extends absDevice
{
    public function __construct($name) {
        $this->name = $name;
        $this->type = 'cpu';
    }
}

class Intel extends CPU
{
     public function __construct() {
        parent::__construct('Intel');
    }
}