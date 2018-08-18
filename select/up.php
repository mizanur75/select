<?php
	$db = new mysqli("localhost","root","","ajax");
	$upz_id = $_POST["upz_id"];
	$union_table = $db->query("select id,name from up where upozila_id='$upz_id'");
	echo "<option>== Union ==</option>";
	while (list($id,$name)=$union_table->fetch_row()) {
		echo "<option value='$id'>$name</option>";
	}