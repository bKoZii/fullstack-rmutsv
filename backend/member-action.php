<script>
  $(document).ready(function() {
    memberList();
  })

  function memberList() {
    var keyword = $('#searchInput').val();
    console.log(keyword);
    $.ajax({
      type: "POST",
      data: {
        keyword: keyword,
      },
      url: "member-fetch.php",
      success: (data, res) => {
        $('#displayMember').html(data);
      }
    })
  }

  $("#searchInput").keyup(function(event) {
    if (event.keyCode === 13) {
      memberList();
    }
  })

  function showClearBtn() {
    const searchInput = document.getElementById('searchInput').value;
    const clearSearchBtn = document.getElementById('clearSearchBtn');
    searchInput ? clearSearchBtn.hidden = false : (clearSearchBtn.hidden = true, memberList());

  }


  function clearSearch() {
    searchInput.value = '';
    clearSearchBtn.hidden = true;
    memberList()
  }

  function memberDelete(memID) {
    Swal.fire({
      text: `คุณต้องการลบสมาชิก ${memID} ใช่หรือไม่?`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "ยกเลิก",
      confirmButtonText: "ยืนยัน"
    }).then((result) => {
      if (result.isConfirmed) {
        try {
          deleteMember(memID);
        } finally {
          Swal.fire({
            title: "Deleted!",
            text: "ลบสมาชิกสำเร็จ",
            icon: "success",
            timerProgressBar: true,
            timer: 2300
          });
          memberList();
        }
      }
    });
  }

  function memberModalForm(title) {
    document.getElementById("modalTitle").innerHTML = title;

    $.ajax({
      url: "member-form.php",
      method: "GET",
      success: (data) => {
        $('#displayIModalBody').html(data);
      }
    })
  }

  function memberModalEdit(memID, title) {
    document.getElementById("modalTitle").innerHTML = title;
    $.ajax({
      url: "member-edit.php",
      method: "POST",
      data: {
        id: memID
      },
      success: (data) => {
        $('#displayIModalBody').html(data);
      }
    })
  }

  function memberModalDetail(memID, title) {
    document.getElementById("modalTitle").innerHTML = title;
    $.ajax({
      url: "member-detail.php",
      method: "POST",
      data: {
        id: memID,
      },
      success: (data) => {
        $('#displayIModalBody').html(data);
      }
    })
  }

  function deleteMember(memID) {
    $.ajax({
      url: 'member-delete.php',
      method: "POST",
      data: {
        id: memID
      },
      success: (data, res) => {
        $('#displayMember').html(data);
      }
    })
  }

  function memberAdd() {
    var title = $('#title').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var pro_id = $('#pro_id').val();
    var email = $('#email').val();
    var password = $('#password').val();
    console.log(title);
    console.log(fname);
    console.log(lname);
    console.log(email);
    console.log(password);
    console.log(pro_id);
    console.log(typeof(pro_id));

    $.ajax({
      url: 'member-add.php',
      type: "POST",
      data: {
        title: title,
        fname: fname,
        lname: lname,
        pro_id: pro_id,
        email: email,
        password: password
      },
      success: (data) => {
        memberList();
      }
    })
  }

  function memberEdit(memID) {
    var title = $('#title').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var pro_id = $('#pro_id').val();
    var email = $('#email').val();
    var password = $('#password').val();
    $.ajax({
      url: 'member-update.php',
      type: "POST",
      data: {
        id: memID,
        title: title,
        fname: fname,
        lname: lname,
        pro_id: pro_id,
        email: email,
        password: password
      },
      success: (data) => {
        memberList();
      }
    })
  }
</script>