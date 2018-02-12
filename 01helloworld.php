<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page HeLlO wOrLd</h1>

<?php
echo "<h3>php keywords are not case-sensitive</h3>";
echo "echo Hello World!<BR>";
ECHO "ECHO Hello World!<br>";
EcHo "EcHo Hello World!<br>";

echo "<h3>Comments</h3>";

// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo "5 &#47;&#42; + 15 &#42;&#47; + 5 = " . $x;

echo "<br>";

echo "<h3>Case-sensitive variable names</h3>";
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

echo "variables use $ and are case-sensitive<br>";

$txt = "Hello world!";
$x = 5; // global scope
$y = 10.5; // global scope

echo $txt . " " . $x . " " . $y . "<br>";
echo "This is the regular $txt <br>";
echo $x + $y;

echo "<h3>Local variables</h3>";
function myScopeTest() {
    // using x or y inside generates an error.
    $x = 22; // local scope
    $insideScope = 33;
    echo "<p>Variable x inside function is: $x</p>";
}
myScopeTest();
echo "<p>Variable x outside function is: $x</p>";
// echo "<p>Variable insideScope outside function is: $insideScope</p>";

echo "<h3>Global variables</h3>";
function myGlobalTest() {
    global $x, $y;
    $y = $x + $y;
}
myGlobalTest();
echo $y; // output 15.5 (5 + 10.5)
echo "<br>";

echo "<h3>$GLOBALS array</h3>";

function myGlobalArrayTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myGlobalArrayTest();
echo $y; // outputs 20.5 (5 + 15.5)
echo "<br>";

echo "<h3>Using the Static keyword</h3>";
function myStaticTest() {
    static $x = 0;
    echo "Test $x <br>";
    $x++;
}
myStaticTest();
myStaticTest();
myStaticTest();
echo "the variable is local to the function.<br>"

?>

</body>
</html>