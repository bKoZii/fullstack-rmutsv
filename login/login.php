<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
  <?php
  if ($_SESSION['admin'] != null) {
    header("location:../backend/");
  }
  $username = $_POST['username'];
  $password = $_POST['password'];

  include("conn.php");


  $sql = "SELECT * FROM admin WHERE adm_username = '$username' AND adm_password = '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $_SESSION['sess_id'] = $row['adm_id'];
      $_SESSION['sess_name'] = $row['adm_name'];
      $_SESSION['sess_level'] = $row['adm_level'];
    }
    header("location:../backend/");
  } else {
    echo "<script type='text/javascript>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Invalid username or password!',
    });
  </script>";
    echo '<meta http-equiv="refresh" content="2;url=index.html" />';
  }

  ?>
</body>

</html>