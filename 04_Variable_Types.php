<!DOCTYPE html>
<html>
<head>
<title>Variable Types</title>
</head>
<body>

<?php

// Integers
$intVar = 12345;
$anotherInt = -12345 + 12345;

// Doubles
$many = 2.2888800;
$many2 = 2.2111200;
$few = $many + $many2;

// Print the result of adding the two doubles
printf("%.2f + %.2f = %.2f<br>\n", $many, $many2, $few);

// Boolean
if (true) {
    // This will always print
    echo "This will always print<br>\n";
} else {
    // This will never print
    echo "This will never print<br>\n";
}

// Boolean values
$trueNum = 3 + 0.14159;
$trueStr = "Tried and true";
$trueArray[49] = "An array element";
$falseArray = [];
$falseNull = null;
$falseNum = 999 - 999;
$falseStr = "";

// Null
$myVar = null;

// Strings
$string1 = "This is a string in double quotes";
$string2 = "This is a somewhat longer, singly quoted string";
$string39 = "This string has thirty-nine characters";
$string0 = ""; // a string with zero characters

$variable = "name";
$literally = 'My $variable will not print!\\n';
print($literally);
$literally = "My $variable will print!\\n";
print($literally);

// Here document
$channel = <<<_XML_
<channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;

echo <<<END
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
<br />
END;

print $channel;

// PHP local variables
$x = 4;

function assignX() {
    $x = 0;
    print("\$x inside function is $x.\n");
}

assignX();
print("\$x outside of function is $x.\n");

// PHP function parameters
// multiply a value by 10 and return it to the caller
function multiply($value) {
    $value = $value * 10;
    return $value;
}

$retval = multiply(10);
Print "Return value is $retval\n";

// PHP global variables
$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();

// PHP Static Variables
function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "
   ";
}
keep_track();
keep_track();
keep_track();
   
?>

</body>
</html>