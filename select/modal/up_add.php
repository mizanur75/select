<?php
  $db = new mysqli("localhost","root","","ajax");
  if (isset($_POST["upAdd"])) {
    if (empty($_POST["upName"])) {
      $errorup = "Name must be required!";
    }else{
      $name = $_POST["upName"];
    }

    if (empty($_POST["cmbUpz"])) {
      $errorselect = "Please select Upozila!";
    }else{
      $cmbUpz_id = $_POST["cmbUpz"];

      $db->query("insert into up(name,upozila_id)values('$name','$cmbUpz_id')");
      $succesup = "Union Successfully Added!";
    }
  }
?>
<script src="../js/jquery.min.js"></script>
<div class="modal fade" id="upModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add your union if not exists</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <span style="color: red;"><?php echo isset($errorup)?$errorup:""?></span>
            <span style="color: green;"><?php echo isset($succesup)?$succesup:""?></span>
        <form action="" method="post">
          <div class="row">
            <label for="" class="col-md-2">Upozila</label>
            <div class="col-md-10">
              <select name="cmbUpz" id="" class="form-control">
                <option></option>
                <?php
                  $db = new mysqli("localhost","root","","ajax");
                  $upozila_table = $db->query("select id,name from upozila order by name");
                  while (list($id,$name)= $upozila_table->fetch_row()) {
                    echo "<option value='$id'>$name</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <br>
          <div class="row">
            <label for="" class="col-md-2">Union</label>
            <div class="col-md-10">
              <input type="text" name="upName" class="form-control">
            </div>
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" name="upAdd" class="btn btn-sm btn-success" value="Add" />
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
  
</script>