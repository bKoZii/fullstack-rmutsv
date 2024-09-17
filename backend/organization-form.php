<?php require_once('./includes/conn.php'); ?>
<div class="displayModalBody" style="padding: 30px 15px 20px 15px;">
  <div class="row">
    <div class="col">
      <label for="name">ชื่อสถานประกอบการ</label>
      <input onkeyup="checkNull();" id="name" class="form-control">
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="type">ประเภทธุรกิจ</label>
      <input onkeyup="checkNull();" id="type" class="form-control">
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="coordinator">ผู้ติดต่อ / ประสานงาน</label>
      <input onkeyup="checkNull();" id="coordinator" class="form-control">
    </div>
    <div class="col">
      <label for="position">ตำแหน่ง</label>
      <input onkeyup="checkNull();" id="position" class="form-control">
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="email">อีเมล</label>
      <input onkeyup="checkNull();" id="email" class="form-control">
    </div>
    <div class="col">
      <label for="phone">เบอร์โทร</label>
      <input onkeyup="checkNull();" id="phone" class="form-control">
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="address">ที่อยู่</label>
      <input onkeyup="checkNull();" id="address" class="form-control">
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="detail">รายละเอียด</label>
      <input onkeyup="checkNull();" id="detail" class="form-control">
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="map">แผนที่</label>
      <input onkeyup="checkNull();" id="map" class="form-control">
    </div>
  </div>
</div>

<div class="modal-footer">
  <button onclick="orgAdd();" id="btnSubmit" data-dismiss="modal" class="btn btn-primary" style="font-size:12pt;width:150px;">
    บันทึกรายการ
  </button>
  <button onclick="clearForm();" class="btn btn-light" style="font-size:12pt;width:100px;">
    เคลียร์
  </button>
</div>

<script>
  function checkNull() {
    // var fname = document.getElementById('fname').value;
    // var lname = document.getElementById('lname').value;
    // var email = document.getElementById('email').value;
    // var password = document.getElementById('password').value;
    // if (fname && lname && email && password) {
    //     document.getElementById('btnSubmit').disabled = false;
    // } else {
    //     document.getElementById('btnSubmit').disabled = true;
    // }
  }

  function clearForm() {
    document.getElementById('fname').value = '';
    document.getElementById('lname').value = '';
    document.getElementById('email').value = '';
    document.getElementById('password').value = '';
  }
</script>