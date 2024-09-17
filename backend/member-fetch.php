<?php
include("includes/conn.php");

$keyword = $_POST['keyword'];

if (!empty($keyword)) {
  $sql = "SELECT member.*,program.* FROM member,program WHERE member.pro_id = program.pro_id AND (member.mem_fname LIKE '%$keyword%' || member.mem_lname LIKE '%$keyword%') ORDER BY member.mem_id DESC";
} else {
  $sql = "SELECT member.*,program.* FROM member,program WHERE member.pro_id = program.pro_id ORDER BY member.mem_id DESC";
}
$result = $conn->query($sql);

?>
<table class='table table-hover border'>
  <thead>
    <tr class="font-weight-bolder">
      <th scope='col' style='width:10px;'>ID</th>
      <th scope='col'>CODE</th>
      <th scope='col'>ชิ่อ-นามสกุล</th>
      <th scope='col'>หลักสูตร</th>
      <th scope='col'>จัดการ</th>
  </thead>
  <tbody>
    <?php $no = 1;
    while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $row["mem_code"]; ?></td>
        <td><?php echo $row["mem_title"] . " " . $row["mem_fname"] . " " . $row["mem_lname"]; ?></td>
        <td><?php echo $row["pro_name"]; ?></td>

        <td>
          <div class="btn-group">
            <button type="button" type="button" data-toggle="modal" data-target="#IModal" onclick="memberModalDetail(<?php echo $row['mem_id'] ?>, 'แสดงรายละเอียด')" class="btn btn-primary"><i class="fas fa-eye"></i></button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#IModal" onclick="memberModalEdit(<?php echo $row['mem_id'] ?>, 'แก้ไขสมาชิก')"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" onclick="memberDelete(<?php echo $row['mem_id'] ?>)"><i class="fas fa-trash"></i></button>
          </div>
        </td>
      </tr>
    <?php $no++;
    } ?>
  </tbody>

</table>

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