<?php

class calculadora
{
    public const PI = 3.14;

    public static function areaCirculo($area)
    {
        return $area = self::PI * $area * $area;
    }


}

$calculando = calculadora::areaCirculo(4);
echo $calculando;