<?php
include("includes/conn.php");

$id = $_POST['id'];
$sql = "SELECT member.*,program.* FROM member,program WHERE member.pro_id = program.pro_id AND member.mem_id = $id ORDER BY member.mem_id DESC";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="row">
  <div class="col ">
    <div class="border border-primary">
      <div class="card-header bg-primary text-white"><span>ID</span></div>
      <div class="card-body">
        <h4><?php echo $row["mem_id"]; ?></h4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="border border-primary">
      <div class="card-header bg-primary text-white">
        <span>CODE</span>
      </div>
      <div class="card-body">
        <h4><?php echo $row["mem_code"]; ?></h4>
      </div>

    </div>

  </div>
  <div class="col">
    <div class="border border-primary">
      <div class="card-header bg-primary text-white">
        <span>คำนำหน้า</span>
      </div>
      <div class="card-body">
        <h4><?php echo $row["mem_title"]; ?></h4>
      </div>

    </div>

  </div>
</div>
<div class="row my-3">
  <div class="col">
    <div class="border border-primary">
      <div class="card-header bg-primary text-white">
        <span>ชื่อ-นามสกุล</span>
      </div>
      <div class="card-body">
        <h4><?php echo $row["mem_fname"] . " " . $row["mem_lname"]; ?></h4>
      </div>

    </div>

  </div>
  <div class="col">
    <div class="border border-primary">
      <div class="card-header bg-primary text-white">
        <span>หลักสูตร</span>
      </div>
      <div class="card-body">
        <h4><?php echo $row["pro_name"] ?></h4>
      </div>

    </div>

  </div>
</div>
</div>

<style>
  tr {
    td {
      width: fit;
    }

    th {

      font-weight: 700;
    }
  }
</style>