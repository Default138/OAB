<?php

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica {

    protected $raio;

    public function getArea() {}

    public function getDesenho() { 
        echo "
      XXXXXXX      
   X           X   
 X               X 
X                 X
 X               X 
   X           X   
      XXXXXXX     
         ";
    }
    
}