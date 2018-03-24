<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  	$pincode = $_POST['postcode'];
  	$servername ="localhost";
	$username = "root";
	$password ="123456";
	$database_name = "pincode";

	$conn1 = mysqli_connect($servername, $username, $password, $database_name);
	 
	// Check connection
	if($conn1 === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	else {
		//echo "sachin";
	}
	$query = "SELECT * FROM pincode where pincode = '{$pincode}' && status = '1'";
	$result = mysqli_query($conn1,$query);
    if ($row = mysqli_fetch_assoc($result))
    {
    	return echo 'available';
    }
    else
    {
    	return echo 'not found';
    }
}

?>