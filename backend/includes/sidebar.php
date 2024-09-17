<div class="app-sidebar sidebar-shadow">
  <div class="app-header__logo">
    <!-- <div class="logo-src"></div> -->
    <!-- <a href="" class="logo-src">
         <div style="font-size:18pt;color:#fff;">SHORT NAME</div>
      </a> -->
    <div class="header__pane ml-auto">
      <div>
        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
  <div class="app-header__mobile-menu">
    <div>
      <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>
  <div class="app-header__menu">
    <span>
      <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
        <span class="btn-icon-wrapper">
          <i class="fa fa-ellipsis-v fa-w-6"></i>
        </span>
      </button>
    </span>
  </div>
  <div class="scrollbar-sidebar">
    <div class="app-sidebar__inner ">
      <ul class="vertical-nav-menu">
        <li class="app-sidebar__heading">Side Menu</li>
        <li>
          <a href="?" class="<?php echo $navDashboard; ?>">
            <i class="metismenu-icon pe-7s-keypad" style="font-size:16pt;"></i>
            <span style="font-size:12pt;">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="<?php echo $navCoop; ?>">
            <i class="metismenu-icon pe-7s-helm" style="font-size:16pt;"></i>
            <span style="font-size:12pt;">ออกฝึกสหกิจศึกษา</span>
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul class="<?php echo $navSubCoop; ?>">
            <li class="<?php echo $navTermCoop; ?>">
              <a href="?page=coop-term">
                <i class="metismenu-icon">
                </i>ภาคการศึกษา
              </a>
            </li>
            <li class="<?php echo $navStudentCoop; ?>">
              <a href="?page=coop-student">
                <i class="metismenu-icon">
                </i>นักศึกษาสหกิจฯ
              </a>
            </li>
            <li>
            <li class="<?php echo $navAdvisorCoop; ?>">
              <a href="?page=coop-advisor">
                <i class="metismenu-icon">
                </i>อาจารย์ที่ปรึกษา
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="?page=experience" class="<?php echo $navExperience; ?>">
            <i class="metismenu-icon pe-7s-settings" style="font-size:16pt;"></i>
            <span style="font-size:12pt;">การฝึกงาน / WIL</span>
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul class="<?php echo $navSubExperience; ?>">
            <li class="<?php echo $navTermExperience; ?>">
              <a href="?page=experience-term">
                <i class="metismenu-icon">
                </i>ภาคการศึกษา
              </a>
            </li>
            <li class="<?php echo $navStudentExperience; ?>">
              <a href="?page=experience-student">
                <i class="metismenu-icon">
                </i>นักศึกษาสหกิจฯ
              </a>
            </li>
            <li>
            <li class="<?php echo $navAdvisorExperience; ?>">
              <a href="?page=experience-advisor">
                <i class="metismenu-icon">
                </i>อาจารย์ที่ปรึกษา
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="?page=project" class="<?php echo $navProject; ?>">
            <i class="metismenu-icon pe-7s-server" style="font-size:16pt;"></i>
            <span style="font-size:12pt;">โครงงานนักศึกษา</span>
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul class="<?php echo $navSubProject; ?>">
            <li class="<?php echo $navTermProject; ?>">
              <a href="?page=project-term">
                <i class="metismenu-icon">
                </i>ภาคการศึกษา
              </a>
            </li>
            <li class="<?php echo $navStudentProject; ?>">
              <a href="?page=project-student">
                <i class="metismenu-icon">
                </i>นักศึกษาสหกิจฯ
              </a>
            </li>
            <li>
            <li class="<?php echo $navAdvisorProject; ?>">
              <a href="?page=project-advisor">
                <i class="metismenu-icon">
                </i>อาจารย์ที่ปรึกษา
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="?page=organization" class="<?php echo $navOrganization; ?>">
            <i class="metismenu-icon pe-7s-culture" style="font-size:16pt;"></i>
            <span style="font-size:12pt;">สถานประกอบการ</span>
          </a>
        </li>
        <li>
          <a href="?page=member" class="<?php echo $navMember; ?>">
            <i class="metismenu-icon pe-7s-users" style="font-size:16pt;"></i>
            <span style="font-size:12pt;">อาจารย์ / เจ้าหน้าที่</span>
          </a>
        </li>
        <li>
          <a href="?page=contact" class="<?php echo $navContact; ?>">
            <i class="metismenu-icon pe-7s-headphones" style="font-size:16pt;"></i>
            <span style="font-size:12pt;">ติดต่อ / สอบถาม</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>