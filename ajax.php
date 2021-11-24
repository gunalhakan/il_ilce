<?php 
	$db = new PDO("mysql:host=localhost;dbname=il_ilce","root","");
	$il_id = $_POST['il_id'];
	$ilceler = $db->query("SELECT * FROM district WHERE city_plate_id ='".$il_id."'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($ilceler as $ilce) {
		echo '<option value"'.$ilce['id'].'">'.$ilce['name'].'</option>';
	}
?>