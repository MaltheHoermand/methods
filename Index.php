<?php
require_once "classes/Computer.php";


$computer = new Computer();
$computer->setNavn("Asus ROG Strix Scar G16 (2024)");
$computer->setRam("32GB");
$computer->setGrafikkort("RTX 4080");
$computer->setStorage("1TB M.2 PCIe SSD");
$computer->setOs("Windows 11 pro");




echo $computer->getNavn()."<br>";
echo $computer->getRam()."<br>";
echo $computer->getGrafikkort()."<br>";
echo $computer->getStorage()."<br>";
echo $computer->getOs()."<br>";