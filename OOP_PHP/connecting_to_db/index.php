 <?php include 'includes/autoloader.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applying the MVC Model Using OOP</title>
</head>
<body>
    <?php
        $userObj = new UsersView();
        echo $userObj->showUsers("David");
        $newObj = new UsersContr();
        $newObj->createUser("Teri", "Pehn di", "teripehndi@chod.com", "chod1234");
        echo $userObj->showUsers("Teri");
    ?>
</body>
</html>