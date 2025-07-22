<?php
class SchedaVideo extends absDevice
{
    public function __construct($name) {
        $this->name = $name;
        $this->type = 'video';
    }
}

