
<!DOCTYPE html>
<html>
<head>
	<title> Pincode Validation</title>
</head>
<body>
<form method = 'post' action ="" enctype="multipart/form-data" > 
	<center>
<input type = "int" name = 'postcode' placeholder = "Enter pincode"  required></form><br>
<input type="Submit" id = "submit" value='submit' name='submit'>
</center>
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<?php
echo "<center>";
if (isset($_POST['submit']))
{
		$pincode = $_POST['postcode'];
		
		if (strlen($pincode) !== 6)
		{
         echo "pincode must be 6 digit";
         exit;
        }
        if(! is_numeric($pincode))
        {
        	echo 'non numeric value not allowed';
        	exit;
        }
        

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
		 echo $pincode.'&nbsp;'  .'Available';
	}
	else
	{
		 echo $pincode.'&nbsp;'  .'Not Available';
	}
	echo "</center>";
	
}
?>
    
<script type="text/javascript">
$(document).ready(function()
    {
        $("#submit").on("click", function(e)
            {
            	console.log('here');
                e.preventDefault();
            });
    });


</script>

</body>
</html>
