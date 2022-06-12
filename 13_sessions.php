<?php
/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();
?>

<?php
if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password =  htmlspecialchars($_POST['password']);

    if($username == 'admin' && $password == 'admin'){
        $_SESSION['username'] = $username;
        header('Location: /php-crash-course/extras/dashboard.php');
    } else {
        echo 'Invalid username or password';
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
</div>

<div>
    <label for="password">Password:</label>
    <input type="password " name="password" id="password">
</div>
<input type = "submit" value = "Submit" name="submit">
</form>