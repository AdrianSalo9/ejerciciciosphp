<?php
function dividir($dividendo, $divisor)
{
  if ($divisor == 0) {
    throw new Exception("División por cero");
  }
  return $dividendo / $divisor;
}
//esto funciona
//echo dividir(6, 3);
//esto va a fallar porque no sabemos que hacer con la excepción
//echo dividir(5, 0);

try {
  echo dividir(6, 3) . "<br>";
  echo dividir(5, 0) . "<br>";
} catch (Throwable $e) {
  echo "Fallo: " . $e->getMessage();
} finally {
  echo "<hr>";
  echo "divisiones acabadas";
}
