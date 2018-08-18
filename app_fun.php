<?php
	echo "<option>== Select ==</option>";
	$db = new mysqli("localhost","root","","test");
	$category_id = $_POST["cmbCategory"];
	$product_table = $db->query("select id,name from product where category_id='$category_id'");
	while (list($id,$name)=$product_table->fetch_row()) {
		echo "<option value='$id'>$name</option>";
	}
?>