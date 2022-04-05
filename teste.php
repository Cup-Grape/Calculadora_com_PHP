<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$resultado;

include("obj_soma.php");

if(isset($_POST["soma"])){
    $obj = new operacao();
    $obj -> soma(intval($num1),intval($num2));

}
if(isset($_POST["sub"])){
    $obj = new operacao();
    $obj -> sub(intval($num1),intval($num2));
}
if(isset($_POST["div"])){
    $obj = new operacao();
    $obj -> div(intval($num1),intval($num2));
}
if(isset($_POST["mult"])){
    $obj = new operacao();
    $obj -> mult(intval($num1),intval($num2));
}



?>