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
              <span>Search</span>
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

<script>
  $(document).ready(function() {
    memberList();
  })

  function memberList() {
    $.ajax({
      type: "GET",
      url: "member-fetch.php",
      success: (data, res) => {
        $('#displayMember').html(data);
      }
    })
  }

  function memberModalForm(title) {
    document.getElementById("modalTitle").innerHTML = title;
    $.ajax({
      url: "member-form.php",
      method: "GET",
      success: (data) => {
        $('#displayIModalBody').html(data);
      }
    })
  }

  function memberAdd() {
    var title = $('#title').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var pro_id = $('#pro_id').val();
    var email = $('#email').val();
    var password = $('#password').val();
    console.log(title);
    console.log(fname);
    console.log(lname);
    console.log(email);
    console.log(password);
    console.log(pro_id);
    console.log(typeof(pro_id));

    $.ajax({
      url: 'member-add.php',
      type: "POST",
      data: {
        title: title,
        fname: fname,
        lname: lname,
        pro_id: pro_id,
        email: email,
        password: password
      },
      success: (data) => {
        memberList();
      }
    })


  }
</script>