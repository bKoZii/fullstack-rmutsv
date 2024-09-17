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
      <label for="name">ชื่อสถานประกอบการ</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_name']; ?></div>

    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="type">ประเภทธุรกิจ</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_type']; ?></div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="coordinator">ผู้ติดต่อประสานงาน</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_coordinator']; ?></div>
    </div>
    <div class="col">
      <label for="position">ตำแหน่ง</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_position']; ?></div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="email"> อีเมล์</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_email']; ?></div>
    </div>
    <div class="col">
      <label for="phone">เบอร์โทร</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_phone']; ?></div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="address"> ที่อยู่</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_address']; ?></div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="detail">รายละเอียดเพิ่มเติม</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_detail']; ?></div>
    </div>
  </div>
  <div class="row mt-3 mb-3">
    <div class="col">
      <label for="map">แผนที่</label>
      <div style="border:solid 1px #ddd; padding:5px 10px;"><?php echo $row['org_map']; ?></div>
    </div>
  </div>
</div>