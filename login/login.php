<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
  <?php
  if ($_SESSION['admin'] != null) {
    header("location:../backend/");
  }
  $username = $_POST['username'];
  $password = $_POST['password'];

  include("conn.php");


  $sql = $conn->prepare("SELECT * FROM admin WHERE adm_username = ? AND adm_password = ?");
  $sql->bind_param("ss", $username, $password);
  $sql->execute();
  $result = $sql->get_result();

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