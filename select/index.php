
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ajax example for Select</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/album.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Nothing to say about me. i am a little man</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="https://twitter.com/mizanur75" class="text-white">Follow on Twitter</a></li>
                <li><a href="https://facebook.com/mizanur.ccr" class="text-white">Like on Facebook</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Ajax</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Ajax Select</h1>
          <div class="row">
            <span><?php echo isset($error)?$error:""?></span>
            <span><?php echo isset($success)?$success:""?></span>
            <label for="" class="col-md-1">District</label>
            <div class="col-md-2">
              <select name="" id="cmbDist" class="form-control-sm">
                <option>== District ==</option>
                <?php
                  $db = new mysqli("localhost","root","","ajax");
                  $district_table = $db->query("select id,name from district order by name");
                  while (list($id,$name)=$district_table->fetch_row()) {
                    echo "<option value='$id'>$name</option>";
                  }
                ?>
              </select>
            </div>
            <label for="" class="col-md-1"><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#distModal">Add New</button></label>

            <label for="" class="col-md-1">Upozila</label>
            <div class="col-md-2">
              <select name="" id="cmbUpz" class="form-control-sm">
                <option>== Upozila ==</option>
              </select>
            </div>
            <label for="" class="col-md-1"><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#upzModal">Add New</button></label>
            <label for="" class="col-md-1">Union</label>
            <div class="col-md-2">
              <select name="" id="cmbUp" class="form-control-sm">
                <option>== Union ==</option>
              </select>
            </div>
            <label for="" class="col-md-1"><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#upModal">Add New</button></label>
          </div>
        </div>
      </section>
    </main>
    <?php include("modal/dist_add.php");?>
    <?php include("modal/upz_add.php");?>
    <?php include("modal/up_add.php");?>
    <footer class="text-muted">
      <div class="container">
        
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
      $(function(){
        $("#cmbDist").change(function(){
          var dis_id = $(this).val();
          $.ajax({
            url:'upz.php',
            method: 'post',
            data: {'dist_id': dis_id},
            success: function(echo){
              $("#cmbUpz").html(echo);
            }
          });
        });
      
        $("#cmbUpz").change(function(){
          var upz_id = $(this).val();
          $.ajax({
            url: 'upz.php',
            method: 'post',
            data: {'upz_id': upz_id},
            success: function(echo){
              $("#cmbUp").html(echo);
            }
          });
        });
      });
    </script>
  </body>
</html>
