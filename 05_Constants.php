<!DOCTYPE html>
<html>
<head>
  <title>Constants</title>
</head>
<body>

<?php
// constant() example
define("MINSIZE", 50);
echo MINSIZE; // 50
echo constant("MINSIZE"); // 50

// valid and invalid constant names

// Valid constant names
define("ONE", "first thing");
define("TWO", "second thing");
define("THREE", "third thing");

// Invalid constant names
// define("2TWO", "second thing"); // Constant names must start with a letter or underscore.
// define("__THREE__", "third value"); // Constant names cannot contain double underscores.

?>

</body>
</html>