<?php
// login.php
session_start();

  if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
    header("Location:granted.php");
  }

  $email = "";
  if (isset($_SESSION["email_preset"])) {
    $email = $_SESSION["email_preset"];
  }
?>

<html>
  <head></head>
  <body>
    <h2>Admin Login</h2>
    <?php
    if (isset($_SESSION["status"])) {
      echo "<div id="status">" .  $_SESSION["status"] . "</div>";
      unset($_SESSION["status"]);
    }
    ?>
    <form action="login_handler.php" method="POST">
      <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>"/>
      </div>
      <div>
       <label for="password">Password</label>
        <input type="password" name="password" id="password" value=""/>
      </div>
      <div>
        <input type="submit" name="submit" id="login" value="Login"/>
      </div>
    </form>
  </body>
</html>
