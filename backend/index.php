<?php
$page = $_GET['page'];
$act = $_GET['act'];

include("includes/conn.php");
include("includes/modal.php");

ob_start();
session_start();

$sess_id = $_SESSION['sess_id'];
$sess_name = $_SESSION['sess_name'];
$sess_level = $_SESSION['sess_level'];

if ($sess_level == 1) {
  $sess_level_name = "Super Admin";
} else {
  $sess_level_name = "Teacher/Staff";
}

if (!($sess_id)) {
  header("location:../login");
}

$sql = "SELECT * FROM setting";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $set_name = $row['set_name'];
  $set_title = $row['set_title'];
  $set_navbar = $row['set_navbar'];
  $set_faculty = $row['set_faculty'];
  $set_footer1 = $row['set_footer1'];
  $set_footer2 = $row['set_footer2'];
}
?>
<!doctype html>
<html lang="en">

<?php include "includes/header.php"; ?>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <?php include "includes/navbar.php"; ?>
    <div class="app-main">
      <?php include "includes/sidebar.php"; ?>
      <div class="app-main__outer">
        <?php
        if ($page == '' || $page == 'home') {
          include "home.php";
        } else if ($page == 'profile') {
          include "profile.php";
        } else if ($page == 'member') include "member.php";
        else if ($page == 'logout') {
          session_destroy();
          header("location:../login");
        } else {
          include "notfound.php";
        }
        ?>
        <?php include "includes/footer.php"; ?>

      </div>
    </div>
  </div>

</body>

</html>
<?php include "includes/scripts.php"; ?>