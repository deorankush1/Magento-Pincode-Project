<?php
//echo "content";
if (isset ($_POST['name'])===true && empty($_POST['name']) === false){

	require '../db/global.php';
	$query = mysql_query("selct * from pincode  where 'pincode'.'pincode' = '". mysql_real_escape_string(trim ($_POST['name']))." ' ");

	echo( mysql_num_rows($query)!== 0) ? mysql_result($query,0,'pincode'):' pincode not found';

}