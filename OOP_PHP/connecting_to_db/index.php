 <?php include 'includes/autoloader.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to DB Using PDO</title>
</head>
<body>
    <?php
         $test = new Test();
         $test->getUsers();
    ?>
</body>
</html>