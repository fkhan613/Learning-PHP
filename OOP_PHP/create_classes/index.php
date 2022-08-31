<?php require 'includes/newClasses.php'?>
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
        $John = new Employee("John", "Smith", 45, "Software Engineer");
        $James = new Employee("James", "Smith", 69, "Software Engineer II");
        $Aiden = new Employee("Aiden", "Smith", 15, "Full Stack Engineer");
        $Yaba = new Alien("Yaba", "Doo", 99999, "Technical Areospace Engineer");
    ?>
</body>
</html>