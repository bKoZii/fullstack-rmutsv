<?php
include("includes/conn.php");

$keyword = $_POST['keyword'];

if (!empty($keyword)) {
  $sql = "SELECT organization.* FROM organization WHERE (organization.org_name LIKE '%$keyword%' ) ORDER BY organization.org_id DESC";
} else {
  $sql = "SELECT organization.* FROM organization ORDER BY organization.org_id DESC";
}
$result = $conn->query($sql);

?>
<table class='table table-hover border'>
  <thead>
    <tr class="font-weight-bolder">
      <th scope='col' style='width:10px;'>ID</th>
      <th scope='col'>ชิ่อสถานประกอบการ</th>
      <th scope='col'>ประเภทธุรกิจ</th>
      <th scope='col'>เบอร์โทร</th>
      <th scope='col'>จัดการ</th>
  </thead>
  <tbody>
    <?php $no = 1;
    while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <th scope="row"><?php echo $row["org_id"] ?></th>
        <td><?php echo $row["org_name"]; ?></td>
        <td><?php echo $row["org_type"]; ?></td>
        <td><?php echo $row["org_phone"]; ?></td>

        <td>
          <div class="btn-group">
            <button type="button" type="button" data-toggle="modal" data-target="#IModal" onclick="orgModalDetail(<?php echo $row['org_id'] ?>, 'แสดงรายละเอียด')" class="btn btn-primary"><i class="fas fa-eye"></i></button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#IModal" onclick="orgModalEdit(<?php echo $row['org_id'] ?>, 'แก้ไขสถานประกอบการ')"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" onclick="orgDelete(<?php echo $row['org_id'] ?>)"><i class="fas fa-trash"></i></button>
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