<?php
include_once 'DBConnector.php';
include_once 'user.php';
$con = new DBConnector;
if(isset($_POST['btn-save']))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city = $_POST['city_name'];
	$user = new User($first_name,$last_name,$city);
	$res = $user->save($con->conn);
	if($res)
	{
		echo "Save operation was succesful";
	}
	else{
		echo "An error occured";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Title goes here 
	</title>
</head>
<body>
	<form method = "post" action = " <?php echo $_SERVER['PHP_SELF']; ?>" >
		<table align = "center">
			<tr>
				<td><input type = "text" name = "first_name" required placeholder = "First name" /> </td>
			</tr>
			<tr>
				<td><input type = "text" name = "last_name" required placeholder = "Last name" /> </td>
			</tr>
			<tr>
				<td><input type = "text" name = "city_name" required placeholder = "City" /> </td>
			</tr>
			<tr>
				<td><button type = "submit" name = "btn-save"><strong> Save </strong></button></td>
			</tr>
		</table></form>

	</body>
	</html>