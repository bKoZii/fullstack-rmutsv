<div class="app-header header-shadow bg-primary header-text-light">
  <div class="app-header__logo">
    <div class="logo-src" style="font-size:18pt;color:#fff;"><?php echo $set_name; ?></div>
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
  <div class="app-header__content">
    <div class="app-header-left">
      <div class="search-wrapper">
        <div class="input-holder">
          <input type="text" class="search-input" placeholder="Search.. (keywords)">
          <button class="search-icon"><span></span></button>
        </div>
        <button class="close"></button>
      </div>
      <ul class="header-menu nav">
        <li class="nav-item">
          <a href="javascript:void(0);" class="nav-link" style="font-size:14pt;">
            <?php echo $set_navbar; ?>
          </a>
        </li>
      </ul>
    </div>
    <div class="app-header-right">
      <div class="header-btn-lg pr-0">
        <div class="widget-content p-0">
          <div class="widget-content-wrapper">
            <div class="widget-content-left">
              <div class="btn-group">
                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                  <img width="42" class="rounded-circle" src="assets/images/avatars/konkamon.jpg" alt="">
                  <i class="fa fa-angle-down ml-2 opacity-8"></i>
                </a>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                  <a href="?page=profile">
                    <button type="button" tabindex="0" class="dropdown-item">
                      <span style="font-size:12pt;">ข้อมูลส่วนตัว</span>
                    </button>
                  </a>
                  <a href="?page=">
                    <button type="button" tabindex="0" class="dropdown-item">
                      <span style="font-size:12pt;">เปลี่ยนรหัสผ่าน</span>
                    </button>
                  </a>
                  <a href="?page=">
                    <button type="button" tabindex="0" class="dropdown-item">
                      <span style="font-size:12pt;">จัดการผู้ใช้งาน</span>
                    </button>
                  </a>
                  <a href="?page=logout">
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" tabindex="0" class="dropdown-item">
                      <span style="font-size:12pt;">ออกจากระบบ</span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <?php
            if ($sess_level  == 1) {
              $sess_level_name = "Super Admin";
            } else {
              $sess_level_name = "Teacher/Staff";
            }
            ?>
            <div class="widget-content-left  ml-3 header-user-info">
              <div class="widget-heading">
                <?php echo $sess_name; ?>
              </div>
              <div class="widget-subheading">
                <?php echo $sess_level_name; ?>
              </div>
            </div>
            <div class="widget-content-right header-user-info ml-3">
              <button type="button" class="p-1 btn btn-primary btn-sm">
                <i class="text-white pe-7s-config pr-1 pl-1" style="font-size: 16pt;font-weight: bold;"></i>
              </button>
            </div>
            <div class="widget-content-right header-user-info ml-0">
              <button type="button" data-toggle="modal" data-target="#logoutModal"
                class="p-1 btn btn-primary btn-sm">
                <i class="text-white pe-7s-power pr-1 pl-1" style="font-size: 16pt;font-weight: bold;"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="logoutModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="logoutModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModal">Sign Out</h5>
        <button type="button" class="close" data-dismiss="modal" style="margin:-22px;">
          <i class="pe-7s-close" style="font-size:28pt;"></i>
        </button>
      </div>
      <div class="modal-body" style="font-size:13pt;padding:30px 15px;">
        <div class="row">
          <div class="col col-8 pr-0">
            <a href="?page=logout">
              <button type="button" style="font-size:12pt;" class="btn btn-primary w-100">ยืนยัน</button>
            </a>

          </div>
          <div class="col col-4 pl-0">
            <button type="button" style="font-size:12pt;" class="btn btn-light w-100" data-dismiss="modal">ยกเลิก</button>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>