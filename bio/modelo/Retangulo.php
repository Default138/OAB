<?php

require_once("IFormaGeometrica.php");

class Retangulo implements IFormaGeometrica {

    protected $base;
    protected $altura;

    public function getArea() {}

    public function getDesenho() {
        echo "  ┌──────────────────────────────────────┐ 
                │                                      │ 
                │                                      │
                |                                      |
                │                                      │ 
                │                                      │ 
                └──────────────────────────────────────┘   ";
    }
    
}