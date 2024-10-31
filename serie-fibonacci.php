<?php

// En la sucesion de Fibonacci cada numero es la suma de los dos anteriores. Los numeros iniciales son 0 y 1.

// Generar los primeros n terminos de la sucesion
function generarFibonacci($n)
{
  $serieFibonacci = [0, 1];
  if ($n < 3) {
    return "Por favor ingrese un número mayor o igual a 3";
  }

  for ($i = 0; $i < $n - 2; $i++) {
    $penultimateIndex = count($serieFibonacci) - 2;
    $lastIndex = count($serieFibonacci) - 1;
    $newElement = $serieFibonacci[$penultimateIndex] + $serieFibonacci[$lastIndex];
    array_push($serieFibonacci, $newElement);
  }

  return $serieFibonacci;
}

print_r(generarFibonacci(20));
