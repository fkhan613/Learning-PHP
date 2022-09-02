<?php 
require_once '../calculator_app/includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Practice</title>
</head>
<body>
    <?php 
        $John = new User\Employee( "John", "Smith", 45, "Software Engineer");
        $James = new User\Employee("James", "Smith", 69, "Software Engineer II");
        $Aiden = new User\Employee("Aiden", "Smith", 15, "Full Stack Engineer");
        $Yaba = new User\Alien("Yaba", "Doo", 99999, "Technical Areospace Engineer");
        $Person = new User\Person("Im a person", 69);
        echo $Person->__toString();
    ?>
</body>
</html>