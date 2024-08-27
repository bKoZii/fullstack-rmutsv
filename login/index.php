<?php
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Konkamon Sion: Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/normalize.min.css">
  <script src="assets/js/prefixfree.min.js"></script>
</head>

<body>
  <div
    style="background-color: cornflowerblue; text-align: center; color:#fff; font-size: 16pt; padding:12px 0px 8px 0px;">
    Konkamon Sion - Login</div>

  <div class="container" onclick="onclick">
    <div class="top"></div>
    <div class="bottom"></div>
    <div class="center">
      <h2>Sign In</h2>
      <?php echo $hostName; ?>
      <form action="login.php" method="post">
        <input type="text" name="username" placeholder="E-Password" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit" class="btn btn-primary">SUBMIT</button>
      </form>
      <h2>&nbsp;</h2>
    </div>
  </div>
</body>

</html>