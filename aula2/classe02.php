<?php

class Animal {
    const TIPO = "Animal";

    public function emitirSom(): void {
        echo "Som qualquer";
    }
}

class Cachorro extends Animal{
    const TIPO = "Cachorro";

    public function emitirSom(): void {
        parent::emitirSom();
        echo " e latido";
    }

}

$c = new Cachorro();
$c->emitirSom();