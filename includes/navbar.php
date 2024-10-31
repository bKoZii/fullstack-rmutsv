<header id="header" class="header sticky-top">

   <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
         <div class="contact-info d-flex align-items-center">
            <i class="d-flex align-items-center">Co-operative Education and Professional
               Experience.</i>
         </div>
         <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
         </div>
      </div>
   </div><!-- End Top Bar -->

   <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
         <a href="" class="logo d-flex align-items-center me-auto">
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">CEPE SCI-TECH</h1>
         </a>
         <?php 
if($page == "" || $page == "home"){
	$home_active = "active";
}else if($page == "project"){
	$project_active = "active";
}else if($page == "coop"){
	$coop_active = "active";
}else if($page == "experience"){
	$experience_active = "active";
}else if($page == "organization"){
	$organization_active = "active";
}
?>
         <nav id="navmenu" class="navmenu">
            <ul>
               <li><a href="?" class="<?php echo $home_active; ?>">หน้าหลัก<br></a></li>
               <li><a href="?#about">หลักสูตร</a></li>
               <li><a href="?page=project" class="<?php echo $project_active; ?>">โครงงานฯ</a></li>
               <li><a href="?page=coop" class="<?php echo $coop_active; ?>">สหกิจศึกษา</a></li>
               <li><a href="?page=experience" class="<?php echo $experience_active; ?>">ฝึกประสบการณ์ฯ</a></li>
               <li><a href="?page=organization" class="<?php echo $organization_active; ?>">สถานประกอบการ</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>

         <a class="cta-btn d-none d-sm-block" href="login/" style="font-size:11pt;">เข้าสู่ระบบ</a>

      </div>

   </div>

</header>