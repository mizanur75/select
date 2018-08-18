<!DOCTYPE html>
<html>
<head>
	<title>Ajax Select</title>
    <script src="js/jquery.min.js"></script>
</head>
<body>
	<section>
    	<div>
        	<select name="" id="cmbSelect">
        		<option value="">== Select ==</option>
		        <?php
					$db = new mysqli("localhost","root","","test");
					$category_table = $db->query("select id,name from category");
					while(list($id,$name)=$category_table->fetch_row()){
						echo "<option value='$id'>$name</option>";
					}
		        ?>
        	</select>
        </div>
        <div>
        	<select id="cmbShow">
            	<option>== Select ==</option>
            </select>
            
        </div>
    </section>


	<script>
		$(function(){
			$("#cmbSelect").change(function(){
				var cmbId = $(this).val();
				$.ajax({
					url:'app_fun.php',
					method: 'post',
					data: {'cmbCategory': cmbId},
					success: function(echo){
						$("#cmbShow").html(echo);
					}
				});
			});
		});
    </script>
</body>
</html>