<?php

class Car 
{
    public $color = 'red';
    private $numberOfTires = 4;
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function __destruct()
    {
        echo "Objeto esta sendo destruído";
    }

    public function setColor($val)
    {
        $this->color = $val;
    } 

    public function getColor()
    {
            return $this->color;
    }
}

$bmw = new Car('white');

echo $bmw->color; //imprimira branco porque nosso construtor atribuiu o valor branco

$bmw-> setColor('black'); // irá sobrescrever a propriedade de cor para preto

echo $bmw-> getColor();

?>