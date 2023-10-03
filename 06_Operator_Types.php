<!DOCTYPE html>
<html>
<head>
  <title>Operator Types</title>
</head>
<body>

<?php
// Arithmetic Operators
  $a = 42;
  $b = 20;

  $c = $a + $b;
  echo "Addition Operation Result: $c <br/>";

  $c = $a - $b;
  echo "Subtraction Operation Result: $c <br/>";

  $c = $a * $b;
  echo "Multiplication Operation Result: $c <br/>";

  $c = $a / $b;
  echo "Division Operation Result: $c <br/>";

  $c = $a % $b;
  echo "Modulus Operation Result: $c <br/>";

  $c = $a++; // $c will be 42 and $a will be 43
  echo "Increment Operation Result: $c <br/>";

  $c = $a--; // $c will be 43 and $a will be 42
  echo "Decrement Operation Result: $c <br/>";

?>

</body>
</html>