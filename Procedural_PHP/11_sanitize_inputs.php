<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age =  htmlspecialchars($_POST['age']);

    echo $name. $age;
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
</div>

<div>
    <label for="age">Age:</label>
    <input type="text " name="age" id="age">
</div>
<input type = "submit" value = "Submit" name="submit">
</form>