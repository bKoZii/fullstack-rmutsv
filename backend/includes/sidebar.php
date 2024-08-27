<div class="app-sidebar sidebar-shadow">
  <div class="app-header__logo">
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
    <div class="app-sidebar__inner">
      <ul class="vertical-nav-menu">
        <li class="app-sidebar__heading">Side Menu</li>
        <li>
          <a href="?" <?php if ($page == "") echo "class='mm-active'"; ?>>
            <i class="metismenu-icon pe-7s-keypad" style="font-size:16pt;"></i>
            <span style="font-size:13pt;">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-helm" style="font-size:16pt;"></i>
            <span style="font-size:13pt;">ออกฝึกสหกิจศึกษา</span>
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>ภาคการศึกษา
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>นักศึกษาสหกิจฯ
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>อาจารย์ที่ปรึกษา
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-settings" style="font-size:16pt;"></i>
            <span style="font-size:13pt;">การฝึกงาน / WIL</span>
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>ภาคการศึกษา
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>นักศึกษาสหกิจฯ
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>อาจารย์ที่ปรึกษา
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-server" style="font-size:16pt;"></i>
            <span style="font-size:13pt;">โครงงานนักศึกษา</span>
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>ภาคการศึกษา
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>นักศึกษาสหกิจฯ
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>อาจารย์ที่ปรึกษา
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-culture" style="font-size:16pt;"></i>
            <span style="font-size:13pt;">สถานประกอบการ</span>
          </a>
        </li>
        <li>
          <a href="?page=member" <?php if ($page == "member") echo "class='mm-active'"; ?>>
            <i class="metismenu-icon pe-7s-users" style="font-size:16pt;"></i>
            <span style="font-size:13pt;">อาจารย์/เจ้าหน้าที่</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-headphones" style="font-size:16pt;"></i>
            <span style="font-size:13pt;">ติดต่อ / สอบถาม</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>