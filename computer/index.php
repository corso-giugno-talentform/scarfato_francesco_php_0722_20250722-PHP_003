<?php
require_once "classes/classComputer.php";
require_once "classes/classCPU.php";
require_once "classes/classRam.php";
require_once "classes/classVideo.php";

$computers = [
    new Computer(
        new CPU('i8'),
        new Ram('8GB'),
        new Video('Nvidia')
    ),

    new Computer(
        new CPU('M4'),
        new Ram('32GB'),
        new Video('AMD Radeon R9 M295X 4 GB')
    ),

    new Computer(
        new Intel(),
        new Ram('16Gb'),
        new Video('MSI Nvidia GeForce RTX 3050')
    )

];

print_r($computers);

echo $computers[0]->video->name . "\n";