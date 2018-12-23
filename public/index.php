<?= "New Text" ?>

<?php 

print_r("hello_1");

echo ("hello_echo <br>
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
    100 => -100,
    -100 => 100,
);
var_dump($array);

$array = array("foo", "bar", "hallo", "world");
var_dump($array);

echo "<br>1<br><br><br><br><br><br><br><br><br><br>";

// многострочная переменная. EOT - метка, любое значение
$message = <<<EOT
f
f
f
f  $%dd
f<br>
EOT;


echo $message;

echo "<br>1<br><br><br><br><br><br><br><br><br><br>";

$array = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array);

echo "<br><br><br>";
?>

<form class="cf" method="POST">
 <div class="half left cf">
   <input type="text" id="input-name" placeholder="username" name="username">
   <input type="email" id="input-email" placeholder="Email address" name="email">
   <input type="text" id="input-subject" placeholder="Subject" name="subject">
 </div>
 <div class="half right cf">
   <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
 </div> 
 <input type="submit" value="Submit" id="input-submit">
</form>


<?php
// if (!empty($_POST)) {
//     echo 'Привет ' . htmlspecialchars($_POST["username"]) . '!';
//     mail ( $_POST["email"], $_POST["subject"], $_POST["message"]);
// } else {
//     echo "nothing<br>";
// }



require_once '../bootstrap/bootstrap.php';
// realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'bootstrap'.DIRECTORY_SEPARATOR.'bootstrap.php');