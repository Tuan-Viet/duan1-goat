</div>
</div>
<script src="../js/admin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script language="javascript">
  // Chức năng chọn hết
  document.getElementById("click_all").onclick = function() {
    // Lấy danh sách checkbox
    var checkboxes = document.getElementsByName('name[]');

    // Lặp và thiết lập checked
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = true;
    }
  };

  // Chức năng bỏ chọn hết
  document.getElementById("unchecked").onclick = function() {
    // Lấy danh sách checkbox
    var checkboxes = document.getElementsByName('name[]');

    // Lặp và thiết lập Uncheck
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = false;
    }
  };
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

</body>

</html>