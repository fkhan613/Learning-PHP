<?php
    declare (strict_types = 1) ;
    include 'autoloader.inc.php';

    $operator = htmlspecialchars($_POST['oper']);
    $num1 = intVal(htmlspecialchars($_POST['num1']));
    $num2 = intVal(htmlspecialchars($_POST['num2']));

    $calc = new Calc($operator, $num1, $num2);
    $result = $calc->evaluate();
    echo $result;
?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
  <head >
    <meta charset = "utf-8" >
    <title>Calculator App</title >
  </ >
  <body >
    <br><br><a href="../index.php">Calculate Again</a>
  </body >
</html >