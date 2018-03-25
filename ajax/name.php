<?php
//echo "content";
if (isset ($_POST['name'])===true && empty($_POST['name']) === false){
	$pin = ($_POST['name']);
	if ( !is_numeric($pin))
	{
		echo "pincode must be numeric";
		exit;
	}
	if (strlen($pin) !==6)
	{
		echo "pincode must be six digit";
		exit;
	}
	require '../db/global.php';
	$query = mysql_query("SELECT status from pincode where pincode1 = '". mysql_real_escape_string(trim ($_POST['name']))." ' ");

	echo( mysql_num_rows($query)!== 0) ? mysql_result($query,0,'status') : 'pincode not found';  

}