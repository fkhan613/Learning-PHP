<?php include "../config/database.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <?php
      //declare variables
      $email = $password = "";

      //check if form is submitted
      if (isset($_POST['reset'])){
        //update the password
        $newPassword = $_POST['newPass'];
        $email = $_SESSION['email'];
        $query = "UPDATE user_info SET password = '$newPassword' WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if($result > 0){
            echo ('<script> alert("Password updated successfully"); window.location.href = "index.php";</script>');
        } else{
            echo ('<script> alert("Password updated unsuccessfully");</script>');
        }
      } 
 
    ?>
    <img class="wave" src="img/wave.png" />
    <div class="container">
      <div class="img">
        <img src="img/bg.svg" />
      </div>
      <div class="login-content">
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="POST">
          <img src="img/avatar.svg" />
          <h2 class="title" style="font-size:2rem;">reset password</h2>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Enter New Password</h5>
              <input type="password" name="newPass" class="input" required
                oninvalid="this.setCustomValidity('Please Enter valid password')"
                oninput="setCustomValidity('')"
              />
            </div>
          </div>
          <input type="submit" name="reset" class="btn" value="Reset" />
        </form>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
