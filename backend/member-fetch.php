<?php
include("includes/conn.php");
$sql = "SELECT member.*,program.* FROM  member,program WHERE member.pro_id = program.pro_id ORDER BY member.mem_id DESC";
$result = $conn->query($sql);

?>
<table class='table table-hover border'>
  <thead>
    <tr class="font-weight-bolder">
      <th scope='col'>ID</th>
      <th scope='col'>CODE</th>
      <th scope='col'>ชิ่อ-นามสกุล</th>
      <th scope='col'>หลักสูตร</th>
      <th scope='col'>อีเมล</th>
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
        <td><?php echo $row["mem_email"]; ?></td>

        <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i></button>
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