<?php
	//include connection file 
	include_once("db_connect.php");
	$sql = "SELECT first_name, last_name FROM register_user";
		$json_data = array(
			"draw"            => intval( $params['draw'] ),   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);
?>