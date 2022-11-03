<?php

namespace App\Controllers;

class Calculadora extends BaseController
{
    public function sumar($num1, $num2)
    {
        $suma = $num1 + $num2;
        echo "La suma es: $suma";
    }
    public function restar($num1, $num2)
    {
        $resta = $num1 - $num2;
        echo "La resta es: $resta";
    }
    public function multiplicar($num1, $num2)
    {
        $multiplicacion = $num1 * $num2;
        echo "La multiplicacion es: $multiplicacion";
    }
    public function dividir($num1, $num2)
    {
        $division = $num1 / $num2;
        echo "La division es: $division";
    }
}