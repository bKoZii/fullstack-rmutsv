<section class="inner-banner py-5">
  <div class="w3l-breadcrumb py-lg-5">
    <div class="container pt-4 pb-sm-4">
      <!-- <h1 class="banner-info text-white font-weight-bolder pt-sm-5 pt-4">สถานประกอบการ</h1> -->
      <h1 class="display-1 text-white">อาจารย์ในหลักสูตร</h1>
      <!-- <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>About</li>
                </ul> -->
    </div>
  </div>
  <!-- <div class="shape">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
        <path fill-opacity="1">
          <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
            values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                                 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

        </path>
      </svg>
    </div> -->
</section>
<section class="w3l-homeblock1 py-5">
  <div class="container py-md-5 py-4">
    <h1 class=" text-center mb-5">รายชื่ออาจารย์ในหลักสูตร</h1>

    <section>
      <div class="card">
        <div class="card-header py-2">
          <h2>แผนก เทคโนโลยีสารสนเทศ (เทียบโอน)</h2>

        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered table-sm">
            <thead>
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col" style="width: 100px;">รหัส</th>
                <th scope="col" style="width: 180px;">คำนำหน้า</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">E-mail</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM member WHERE pro_id = 1";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $row['mem_id'] ?></td>
                    <td><?php echo $row['mem_code'] ?></td>
                    <td><?php echo $row['mem_title'] ?></td>
                    <td><?php echo $row['mem_fname'] ?></td>
                    <td><?php echo $row['mem_lname'] ?></td>
                    <td><?php echo $row['mem_email'] ?></td>
                  </tr>
                  <?php
                }
              } ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <p>จำนวนบุคลากร: <?php echo $result->num_rows ?> ท่าน</p>
        </div>
      </div>
    </section>

    <section class="mt-5">
      <div class="card">
        <div class="card-header">
          <h2>แผนก เทคโนโลยีอุตสาหการ</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered table-sm">
            <thead>
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col" style="width: 100px;">รหัส</th>
                <th scope="col" style="width: 180px;">คำนำหน้า</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">E-mail</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM member WHERE pro_id = 3";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $row['mem_id'] ?></td>
                    <td><?php echo $row['mem_code'] ?></td>
                    <td><?php echo $row['mem_title'] ?></td>
                    <td><?php echo $row['mem_fname'] ?></td>
                    <td><?php echo $row['mem_lname'] ?></td>
                    <td><?php echo $row['mem_email'] ?></td>
                  </tr>
                  <?php
                }
              }
              $conn->close() 
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <p>จำนวนบุคลากร: <?php echo $result->num_rows ?> ท่าน</p>
        </div>
      </div>
    </section>
  </div>

</section>