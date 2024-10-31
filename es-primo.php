<?php

function esPrimo($n)
{
  if ($n === 1) {
    return "1, por convenio, no se considera ni primo ni compuesto.";
  }
  if ($n === 2) {
    return "Es primo";
  }

  for ($i = 2; $i < $n; $i++) {
    if ($n % $i === 0) {
      return "No es primo";
    }
    return "Es primo";
  }
}

print(esPrimo(32));
