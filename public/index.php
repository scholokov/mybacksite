<?="New Text"?>

<?php 

print_r("hello_1");

echo("hello_echo <br>
kdokok<br>
;ldld<br>
;;d f");


const HELLO = "Hi World";
//print_r(get_defined_constants());

echo HELLO;

echo __LINE__;

echo __FILE__;


$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);

$array = array("foo", "bar", "hallo", "world");
var_dump($array);

echo "<br><br><br><br><br><br><br><br><br><br><br>";

$array = array(
    "a",
    "b",
6 => "c",
    "d",
);
var_dump($array);

echo "<br><br><br>";


require_once '../bootstrap/bootstrap.php';
// realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'bootstrap'.DIRECTORY_SEPARATOR.'bootstrap.php');