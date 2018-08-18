<?php
  $db = new mysqli("localhost","root","","ajax");
  if (isset($_POST["distAdd"])) {
    if (empty($_POST["dstName"])) {
      $errord = "Field must be required!";
    }else{
      $name = $_POST["dstName"];

      $db->query("insert into district(name)values('$name')");
      $succesd = "District Successfully Added!";
    }
  }
?>
<div class="modal fade" id="distModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add your district if not exists</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <span style="color: red;"><?php echo isset($errord)?$errord:""?></span>
            <span style="color: green;"><?php echo isset($succesd)?$succesd:""?></span>
        <form action="" method="post">
          <div class="row">
            <label for="" class="col-md-2">District</label>
            <div class="col-md-10">
              <input type="text" name="dstName" class="form-control">
            </div>
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" name="distAdd" class="btn btn-sm btn-success" value="Add" />
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>