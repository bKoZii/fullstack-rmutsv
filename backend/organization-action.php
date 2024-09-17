<script>
  $(document).ready(function() {
    orgList();
  })

  function orgList() {
    var keyword = $('#searchInput').val();
    console.log(keyword);
    $.ajax({
      type: "POST",
      data: {
        keyword: keyword,
      },
      url: "organization-fetch.php",
      success: (data, res) => {
        $('#displayOrg').html(data);
      }
    })
  }

  $("#searchInput").keyup(function(event) {
    if (event.keyCode === 13) {
      orgList();
    }
  })

  function showClearBtn() {
    const searchInput = document.getElementById('searchInput').value;
    const clearSearchBtn = document.getElementById('clearSearchBtn');
    searchInput ? clearSearchBtn.hidden = false : (clearSearchBtn.hidden = true, orgList());

  }


  function clearSearch() {
    searchInput.value = '';
    clearSearchBtn.hidden = true;
    orgList()
  }

  function orgDelete(id) {
    Swal.fire({
      text: `คุณต้องการลบสถานประกอบการ ${id} ใช่หรือไม่?`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "ยกเลิก",
      confirmButtonText: "ยืนยัน"
    }).then((result) => {
      if (result.isConfirmed) {
        try {
          deleteOrg(id);
        } finally {
          Swal.fire({
            title: "Deleted!",
            text: "ลบสถานประกอบการสำเร็จ",
            icon: "success",
            timerProgressBar: true,
            timer: 2300
          });
          orgList();
        }
      }
    });
  }

  function orgModalForm(title) {
    document.getElementById("modalTitle").innerHTML = title;
    $.ajax({
      url: "organization-form.php",
      method: "GET",
      success: (data) => {
        $('#displayIModalBody').html(data);
      }
    })
  }

  function orgModalEdit(orgID, title) {
    document.getElementById("modalTitle").innerHTML = title;
    $.ajax({
      url: "organization-edit.php",
      method: "POST",
      data: {
        id: orgID
      },
      success: (data) => {
        $('#displayIModalBody').html(data);
      }
    })
  }

  function orgModalDetail(orgID, title) {
    document.getElementById("modalTitle").innerHTML = title;
    $.ajax({
      url: "organization-detail.php",
      method: "POST",
      data: {
        id: orgID,
      },
      success: (data) => {
        $('#displayIModalBody').html(data);
      }
    })
  }

  function deleteOrg(orgID) {
    $.ajax({
      url: 'organization-delete.php',
      method: "POST",
      data: {
        id: orgID
      },
      success: (data, res) => {
        $('#displayOrg').html(data);
      }
    })
  }

  function orgAdd() {
    var name = $('#name').val()
    var type = $('#type').val()
    var coordinator = $('#coordinator').val()
    var position = $('#position').val()
    var email = $('#email').val()
    var phone = $('#phone').val()
    var address = $('#address').val()
    var detail = $('#detail').val()
    var map = $('#map').val()
    console.log(name, type, coordinator, position, email, phone, address, detail, map)

    $.ajax({
      url: 'organization-add.php',
      type: "POST",
      data: {
        name: name,
        type: type,
        phone: phone,
        coordinator: coordinator,
        position: position,
        email: email,
        address: address,
        detail: detail,
        map: map
      },
      success: (data) => {
        orgList();
        console.log(data)
      }
    })
  }

  function orgEdit(orgID) {
    var name = $('#name').val()
    var type = $('#type').val()
    var coordinator = $('#coordinator').val()
    var position = $('#position').val()
    var email = $('#email').val()
    var phone = $('#phone').val()
    var address = $('#address').val()
    var detail = $('#detail').val()
    var map = $('#map').val()
    $.ajax({
      url: 'organization-update.php',
      type: "POST",
      data: {
        id: orgID,
        name: name,
        type: type,
        coordinator: coordinator,
        position: position,
        email: email,
        phone: phone,
        address: address,
        detail: detail,
        map: map,
      },
      success: (data) => {
        orgList();
      }
    })
  }
</script>