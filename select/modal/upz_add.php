<?php
  $db = new mysqli("localhost","root","","ajax");
  if (isset($_POST["upzAdd"])) {
    if (empty($_POST["upzName"])) {
      $errorupz = "Field must be required!";
    }else{
      $name = $_POST["upzName"];
    }

    if (empty($_POST["cmbdist"])) {
      $errordist = "Please select district";
    }else{
      $cmbdist_id = $_POST["cmbdist"];

      $db->query("insert into upozila(name,district_id)values('$name','$cmbdist_id')");
      $succes = "Upozila Successfully Added!";
    }
  }
?>
<div class="modal fade" id="upzModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add your Upozila if not exists</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <span style="color: green;"><?php echo isset($succes)?$succes:""?></span>
        <form action="" method="post">
          <div class="row">
            <label for="" class="col-md-2">District</label>
            <div class="col-md-10">
              <select name="cmbdist" id="" class="form-control">
                <option></option>
                <?php
                  $db = new mysqli("localhost","root","","ajax");
                  $district_table = $db->query("select id,name from district order by name");
                  while (list($id,$name)= $district_table->fetch_row()) {
                    echo "<option value='$id'>$name</option>";
                  }
                ?>
              </select>
              <span style="color: red;"><?php echo isset($errordist)?$errordist:""?></span>
            </div>

          </div>
          
          <br>
          <div class="row">
            <label for="" class="col-md-2">Upozila</label>
            <div class="col-md-10">
              <input type="text" name="upzName" class="form-control">
              <span style="color: red;"><?php echo isset($errorupz)?$errorupz:""?></span>
            </div>
            
          </div>
          
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" name="upzAdd" class="btn btn-sm btn-success" value="Add" />
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>