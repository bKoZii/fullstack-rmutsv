<?php
ob_start();
session_start();
include "includes/conn.php";

// กำหนดตัวแปรที่จำค่าไว้แบบ session
$sess_id = $_SESSION['sess_id'];
$sess_name = $_SESSION['sess_name'];
$sess_level = $_SESSION['sess_level'];
$sess_program = $_SESSION['sess_program'];

$role = $_GET['role'];
if ($role) {
  $_SESSION['sess_role'] = $role;
}
$role = $_SESSION['sess_role'];
if ($role) {
  $sess_user = $role;
} else {
  $sess_user = $sess_level;
}

$program = $_GET['program'];
if ($program) {
  $_SESSION['sess_program'] = $program;
  $sess_program = $_SESSION['sess_program'];
}

$sql = "SELECT * FROM program WHERE pro_id='$sess_program' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $sess_program_name = $row['pro_name'];
}

if ($sess_user == 1) {
  $sess_leval_name = "Super Admin";
} else if ($sess_user == 2) {
  $sess_leval_name = "Subject Instructor";
} else {
  $sess_leval_name = "Advisor / Staff";
}

// ตรวจสอบค่าว่างของ session
if (!($sess_id)) {
  header("location:../login");
}

$page = $_GET['page'];
$act = $_GET['act'];

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

// sidebar menu active
if ($page == '' || $page == 'home') {
  $breadcrumb = "Dashboard";
  $navDashboard = "mm-active";
} else if ($page == 'profile') {
  $breadcrumb = "Profile";
  $navProfile = "mm-active";
} else if ($page == 'role') {
  $breadcrumb = "Change Role";
  $navRole = "mm-active";
} else if ($page == 'coop-term') {
  $breadcrumb = "Term";
  $navCoop = "mm-active";
  $navSubCoop = "mm-show";
  $navTermCoop = "mm-active";
} else if ($page == 'coop-student') {
  $breadcrumb = "Student";
  $navCoop = "mm-active";
  $navSubCoop = "mm-show";
  $navStudentCoop = "mm-active";
} else if ($page == 'coop-advisor') {
  $breadcrumb = "Advisor";
  $navCoop = "mm-active";
  $navSubCoop = "mm-show";
  $navAdvisorCoop = "mm-active";
} else if ($page == 'experience-term') {
  $breadcrumb = "Term";
  $navExperience = "mm-active";
  $navSubExperience = "mm-show";
  $navTermExperience = "mm-active";
} else if ($page == 'experience-student') {
  $breadcrumb = "Student";
  $navExperience = "mm-active";
  $navSubExperience = "mm-show";
  $navStudentExperience = "mm-active";
} else if ($page == 'experience-advisor') {
  $breadcrumb = "Advisor";
  $navExperience = "mm-active";
  $navSubExperience = "mm-show";
  $navAdvisorExperience = "mm-active";
} else if ($page == 'project-term') {
  $breadcrumb = "Term";
  $navProject = "mm-active";
  $navSubProject = "mm-show";
  $navTermProject = "mm-active";
} else if ($page == 'project-student') {
  $breadcrumb = "Student";
  $navProject = "mm-active";
  $navSubProject = "mm-show";
  $navStudentProject = "mm-active";
} else if ($page == 'project-advisor') {
  $breadcrumb = "Advisor";
  $navProject = "mm-active";
  $navSubProject = "mm-show";
  $navAdvisorProject = "mm-active";
} else if ($page == 'organization') {
  $breadcrumb = "Organization";
  $navOrganization = "mm-active";
} else if ($page == 'member') {
  $breadcrumb = "Lecturer / Staff";
  $navMember = "mm-active";
} else if ($page == 'contact') {
  $breadcrumb = "Contact";
  $navContact = "mm-active";
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
        } else if ($page == 'role') {
          include "role.php";
        } else if ($page == 'organization') {
          include "organization.php";
        } else if ($page == 'member') {
          include "member.php";
        } else if ($page == 'project-term') {
          include "project-term.php";
        } else if ($page == 'project-student') {
          include "project-student.php";
        } else if ($page == 'project-advisor') {
          include "project-advisor.php";
        } else if ($page == 'logout') {
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
<?php include "includes/modal.php"; ?>
<?php include "includes/scripts.php"; ?>