<form action="connexion.php" method="POST">
    <div>
        <h2>Login</h2>
    </div>
  <div>
    <input id="username" type="text" name="username" placeholder="Username">
  </div>
  <div>
    <input id="password" type="password" name="password" placeholder="Password">
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>

<?php
   if (isset($_POST['username'])) { $username = $_POST['username']; }
   if (isset($_POST['password'])) { $username = $_POST['password']; }

?>
