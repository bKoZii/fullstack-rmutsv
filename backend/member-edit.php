<?php
require_once('includes/conn.php');
$memID = $_POST['id'];
$sql = "SELECT member.*,program.* FROM member,program WHERE member.pro_id = program.pro_id AND member.mem_id = $memID";
$result = $conn->query($sql);
// $row = $result->fetch_assoc();
while ($row = $result->fetch_assoc()) {

  $title = $row['mem_title'];
  $fname = $row['mem_fname'];
  $lname = $row['mem_lname'];
  $pro_id = $row['pro_id'];
  $pro_name = $row['pro_name'];
  $email = $row['mem_email'];
  $password = $row['mem_password'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="modal-body">
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="title">คำนำหน้า</label>
          <select name="title" id="title" class="form-control" required>
            <option selected value="<?php echo $title; ?>"><?php echo $title; ?></option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
            <option value="อาจารย์">อาจารย์</option>
            <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
          </select>
        </div>
      </div>
      <div class="col">
        <div class="form-group"><label for="fname">ชื่อ<input type="text" name="fname" value="<?php echo $fname; ?>" id="fname" class="form-control" required onkeyup="checkNull()"></label></div>
      </div>
      <div class="col">
        <div class="form-group"><label for="lname">นามสกุล<input type="text" name="lname" id="lname" class="form-control" required onkeyup="checkNull()" value="<?php echo $lname; ?>"></label></div>
      </div>
    </div>
    <div class="row my-3">
      <div class="col">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select name="pro_id" id="pro_id" class="form-control" required onkeyup="checkNull()">
            <option value="<?php echo $pro_id; ?>"><?php echo $pro_name; ?></option>
            <?php
            $sql = "SELECT program.* FROM program WHERE program.pro_id != $pro_id";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
              <option value="<?php echo $row['pro_id']; ?>"><?php echo $row['pro_name']; ?></option>
            <?php }
            ?>

          </select>
        </div>

      </div>
      <div class="col">
        <div class="form-group"><label for="email">อีเมล<input type="text" name="email" id="email" class="form-control" required onkeyup="checkNull()" value="<?php echo $email; ?>"></label></div>
      </div>
      <div class="col">
        <div class="form-group"><label for="password">รหัสผ่าน<input type="password" id="password" name="password" class="form-control" required onkeyup="checkNull()" value="<?php echo $password; ?>"></label></div>
      </div>
    </div>

  </div>
  <div class="modal-footer">
    <div class="btn-group btn-group-lg">
      <button class="btn btn-white" onclick="clearForm();" data-dismiss="modal" disabled id="clearFormBtn">Clear Form</button>
      <button class="btn btn-primary" onclick="memberEdit(<?php echo $memID; ?>);" data-dismiss="modal" disabled id="memberSubmit">อัพเดท</button>
    </div>
  </div>
</body>

</html>

<script>
  function checkNull() {
    const title = $('#title').val();
    const fname = $('#fname').val();
    const lname = $('#lname').val();
    const pro_id = $('#pro_id').val();
    const email = $('#email').val();
    const password = $('#password').val();

    $('#memberSubmit').prop('disabled', !(fname && lname && email && password));
    $('#clearFormBtn').prop('disabled', !(fname || lname || email || password));
  }

  function clearForm() {
    $('#title').val('นาย');
    $('#fname').val('');
    $('#lname').val('');
    $('#pro_id').val('1');
    $('#email').val('');
    $('#password').val('');
    checkNull();
  }
</script>