<div class="app-main__inner">
  <div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div style="font-size:14pt;">Lecturer / Staff</div>
      </div>
      <div class="page-title-actions">
        <div class="d-inline-block">
          <button type="button" data-toggle="modal" data-target="#IModal" onclick="memberModalForm('เพิ่มอาจารย์ / เจ้าหน้าที่')"
            class="btn-shadow btn btn-info" style="margin-top:-9px;">
            <span class="btn-icon-wrapper pr-2 opacity-7">
              <i class="fa fa-solid fa-user-plus"></i>
            </span>
            <span style="font-size:12pt;">
              เพิ่มรายการ
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="mb-3 card">
        <div class="card-header-tab card-header-tab-animation card-header">
          <div class="card-header-title">
            อาจารย์ / เจ้าหน้าที่
          </div>
          <ul class="nav">
            <li class="nav-item">
              <input type="text" placeholder="ค้นหา..." class="form-control" id="searchInput" onkeyup="showClearBtn()">
              <button class="btn btn-primary btn-lg mx-1" onclick="memberList(searchInput)"><i class="fa fa-search"></i></button>
              <button class="btn btn-danger btn-lg" id="clearSearchBtn" hidden onclick="clearSearch()"><i class="fa fa-times-circle"></i></button>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div id="displayMember"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once('member-action.php') ?>