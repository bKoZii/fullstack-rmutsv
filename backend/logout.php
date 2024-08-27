<?php
ob_start();
session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
</body>

</html>
<?php
echo '<script type="text/javascript">
            Swal.fire({
               title: "ยืนยันการลบ?",
               text: " ",
               icon: "warning",
               showCancelButton: true,
               confirmButtonColor: "#3085d6",
               cancelButtonColor: "#d33",
               confirmButtonText: "ยืนยัน",
               cancelButtonText: "ยกเลิก"
            }).then((result) => {
               if (result.isConfirmed) {';
                  session_destroy();
                  echo '<meta http-equiv="refresh" content="2;url=../" />';
                  header("Location: ../login");
                  // echo '<meta http-equiv="refresh" content="2;url=../" />
                  echo '
               }
            });
         </script>';
