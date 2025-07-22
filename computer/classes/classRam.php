<?php
class Ram extends absDevice
{
    public function __construct($name) {
        $this->name = $name;
        $this->type = 'ram';
    }
}

