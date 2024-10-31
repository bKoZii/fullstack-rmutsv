<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include('includes/conn.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Work Field - Corporate Category Bootstrap Responsive Web Template - About Us : W3Layouts</title>
  <!-- Template CSS Style link -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!-- header -->

  <section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
      <div class="container pt-4 pb-sm-4">
        <h1 class="display-1 text-white">โครงงานนักศึกษา</h1>
      </div>
    </div>
  </section>
  <!-- //inner banner -->

  <!-- about block -->
  <section class="w3l-homeblock1 py-5">
    <div class="container-fluid py-md-5 py-4">
      <h1 class="text-center mb-5">รายชื่อโครงงานนักศึกษา</h1>
      <div class="table-responsive">
        <table class="table table-sm table-bordered align-middle table-hover">
          <thead>
            <tr class="align-middle text-center">
              <th scope="col" style="width: 55px;">ลำดับ</th>
              <th scope="col" style="width: 600px;">ชื่อโครงการ</th>
              <th scope="col" style="width: 250px;">หมวดหมู่</th>
              <th scope="col" style="width: 250px;">สมาชิก</th>
              <th scope="col" style="width: 300px;">อาจารย์ที่ปรึกษา</th>
              <th scope="col">กลุ่ม</th>
              <th scope="col">ห้องสอบ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $sql = "SELECT * FROM project_project, project_type WHERE project_project.typ_id = project_type.typ_id";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                  ?>
                <tr class="align-middle">
                  <td class="text-center"><?php echo $row['prj_id'] ?>
                  </td>
                  <td style="	overflow: hidden;
display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 2;"><?php echo $row['prj_name_th'] ?></td>
                  <td><?php echo $row['typ_name'] ?></td>
                  <td>
                    <?php
                    $student_sql = "SELECT stu_title, stu_fname, stu_lname FROM project_student, student WHERE project_student.prj_id = " . $row['prj_id'] . " AND project_student.stu_id = student.stu_id ORDER BY student.stu_id DESC";
                    $student_result = $conn->query($student_sql);
                    if ($student_result->num_rows > 0) {
                      while ($student_row = $student_result->fetch_assoc()) {
                        ?>
                        <p>
                          <?php echo $student_row['stu_title'] . " " . $student_row['stu_fname'] . " " . $student_row['stu_lname']; ?>
                        </p>
                        <?php
                      }
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $member_sql = "SELECT mem_title, mem_fname, mem_lname FROM project_advisor, project_project, member WHERE project_advisor.adv_id = project_project.adv_id AND project_project.prj_id = " . $row['prj_id'] . " AND project_advisor.mem_id = member.mem_id ORDER BY member.mem_id DESC";
                    $member_result = $conn->query($member_sql);
                    if ($member_result->num_rows > 0) {
                      while ($member_row = $member_result->fetch_assoc()) {
                        ?>
                        <p>
                          <?php echo $member_row['mem_title'] . " " . $member_row['mem_fname'] . " " . $member_row['mem_lname']; ?>
                        </p>
                        <?php
                      }
                    }
                    ?>
                  </td>
                  <?php
                  $section_sql = "SELECT sec_name, roo_name FROM project_section, project_project, project_room WHERE project_project.prj_id = " . $row['prj_id'] . " AND project_project.sec_id = project_section.sec_id AND project_room.roo_id = project_section.roo_id";
                  $section_result = $conn->query($section_sql);
                  if ($section_result->num_rows > 0) {
                    while ($section_row = $section_result->fetch_assoc()) {
                      ?>
                      <td>
                        <p>
                          <?php echo $section_row['sec_name']; ?>
                        </p>
                      </td>
                      <td>
                        <p><?php echo $section_row['roo_name'] ?></p>
                      </td>
                      <?php
                    }
                  }
                  ?>

                  </td>
                  <?php
                  $no++;
                }
              }
              $conn->close();
              ?>

            </tr>
          </tbody>
        </table>
      </div>
  </section>

  <!-- Js scripts -->
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->

  <!-- common jquery plugin -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- //common jquery plugin -->

  <!-- /counter-->
  <script src="assets/js/counter.js"></script>
  <!-- //counter-->

  <!-- testimonial script -->
  <script>
    $(document).ready(function () {

      $('.client-single').on('click', function (event) {
        event.preventDefault();

        var active = $(this).hasClass('active');

        var parent = $(this).parents('.testi-wrap');

        if (!active) {
          var activeBlock = parent.find('.client-single.active');

          var currentPos = $(this).attr('data-position');

          var newPos = activeBlock.attr('data-position');

          activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(
            currentPos);
          activeBlock.attr('data-position', currentPos);

          $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(
            newPos);
          $(this).attr('data-position', newPos);

        }
      });

    }(jQuery));
  </script>
  <!-- //testimonial script -->

  <!-- theme switch js (light and dark)-->
  <script src="assets/js/theme-change.js"></script>
  <!-- //theme switch js (light and dark)-->

  <!-- MENU-JS -->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!-- //MENU-JS -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->

  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap -->
  <!-- //Js scripts -->
</body>

</html>