<?php
require_once('./includes/conn.php');
$id = $_POST['id'];
$sql = "SELECT organization.* FROM organization WHERE organization.org_id = $id ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();

?>
<div class="modal-body" style="padding: 15px;">
  <div class="row mb-3">
    <div class="col">
      <div class="form-group">
        <label for="name">ชื่อสถานประกอบการ</label>
        <input type="text" class="form-control" id="name" value="<?php echo $row['org_name']; ?>"></input>
      </div>

    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <div class="form-group">
        <label for="type">ประเภทธุรกิจ</label>
        <input type="text" class="form-control" id="type" value="<?php echo $row['org_type']; ?>"></input>
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <div class="form-group">
        <label for="coordinator">ผู้ติดต่อประสานงาน</label>
        <input type="text" class="form-control" id="coordinator" value="<?php echo $row['org_coordinator']; ?>"></input>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="position">ตำแหน่ง</label>
        <input type="text" class="form-control" id="position" value="<?php echo $row['org_position']; ?>"></input>
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <div class="form-group">
        <label for="email"> อีเมล์</label>
        <input type="text" class="form-control" id="email" value="<?php echo $row['org_email']; ?>"></input>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="phone">เบอร์โทร</label>
        <input type="text" class="form-control" id="phone" value="<?php echo $row['org_phone']; ?>"></input>
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <div class="form-group">
        <label for="address"> ที่อยู่</label>
        <input type="text" class="form-control" id="address" value="<?php echo $row['org_address']; ?>"></input>
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <div class="form-group">
        <label for="detail">รายละเอียดเพิ่มเติม</label>
        <input type="text" class="form-control" id="detail" value="<?php echo $row['org_detail']; ?>"></input>
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <div class="form-group">
        <label for="map">แผนที่ </label>
        <textarea type="text" class="form-control" id="map" value="<?php echo $row['org_map']; ?>"></textarea>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
  <div class="btn-group btn-group-lg">
    <button class="btn btn-white" onclick="clearForm();" data-dismiss="modal" disabled id="clearFormBtn">Clear Form</button>
    <button class="btn btn-primary" onclick="orgEdit(<?php echo $id; ?>);" data-dismiss="modal" id="memberSubmit">อัพเดท</button>
  </div>
</div>