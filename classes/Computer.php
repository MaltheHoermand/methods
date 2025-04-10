<?php
class Computer {


    private $navn;
    private $processor;
    private $ram;
    private $grafikkort;
    private $storage;
    private $os;
    public function getNavn() {
        return $this->navn;
    }
    public function setNavn($navn) {
        $this->navn = $navn;
    }
    public function getProcessor() {
        return $this->processor;
    }
    public function setProcessor($processor) {
        $this->processor = $processor;
    }
    public function getRam() {
        return $this->ram;
    }
    public function setRam($ram) {
        $this->ram = $ram;
    }
    public function getGrafikkort() {
        return $this->grafikkort;
    }
    public function setGrafikkort($grafikkort) {
        $this->grafikkort = $grafikkort;
    }
    public function getStorage() {
        return $this->storage;
    }
    public function setStorage($storage) {
        $this->storage = $storage;
    }
    public function getOs() {
        return $this->os;
    }
    public function setOs($os) {
        $this->os = $os;
    }

}