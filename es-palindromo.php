<?php

function esPalindromo($string)
{
  $array = str_split($string);
  $reversedArray = array_reverse($array);
  if ($array !== $reversedArray) {
    return "No es un palíndromo";
  }
  return "Es un palíndromo";
}

print(esPalindromo("arran"));
