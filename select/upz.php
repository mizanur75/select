<?php
	$db = new mysqli("localhost","root","","ajax");
	$dist_id = $_POST["dist_id"];
	$upozila_table = $db->query("select id,name from upozila where district_id='$dist_id'");
	if($_POST["dist_id"] = $dist_id){
		echo "<option>== Upozila ==</option>";
	}
	while (list($id,$name)=$upozila_table->fetch_row()) {
		echo "<option value='$id'>$name</option>";
	}

	$upz_id = $_POST["upz_id"];
	$union_table = $db->query("select id,name from up where upozila_id='$upz_id'");
	if($_POST["upz_id"] = $upz_id){
		echo "<option>== Union ==</option>";
	}
	while (list($id,$name)=$union_table->fetch_row()) {
		echo "<option value='$id'>$name</option>";
	}
	