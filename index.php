  <?php
  if ($_SESSION['admin'] == null) {
    header("Location: login");
  } else {
    header("Location: backend");
  }
  ?>

