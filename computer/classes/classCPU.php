<?php
class CPU extends absDevice
{
    public function __construct($name) {
        $this->name = $name;
        $this->type = 'cpu';
    }
}