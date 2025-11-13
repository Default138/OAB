<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica {

    protected $lado;

    public function getArea() {

    }

    public function getDesenho() {
        echo "      ┌────────┐    
                    │        │    
                    │        │       
                    │        │    
                    └────────┘    ";
    }
    
}