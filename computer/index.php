<?php
require_once "classes/classComputer.php";
require_once "classes/classCPU.php";
require_once "classes/classRam.php";
require_once "classes/classSchedaVideo.php";

$cpu = new CPU();
$ram = new Ram('kensington', '8GB');
$video = new SchedaVideo();

$computer = new Computer($cpu, $ram, $video);

print_r($computer);