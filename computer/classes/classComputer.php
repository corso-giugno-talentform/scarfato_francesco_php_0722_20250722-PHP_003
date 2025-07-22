<?php
require_once "absClassDevice.php";

class Computer
{
    public $ram;
    public $cpu;
    public $video;

    public function __construct(CPU $cpu, Ram $ram, Video $video)
    {
        $this->ram = $ram;
        $this->cpu = $cpu;
        $this->video = $video;
    }
}