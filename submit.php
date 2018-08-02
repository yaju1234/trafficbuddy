
<?php
ini_set('error_reporting', E_ALL|E_STRICT);
ini_set('display_errors', 1);
include("db_connection.php");

$licence_image = $_FILES['licence_image']['name'];
$ticket_front_image = $_FILES['ticket_front_image']['name'];
$ticket_rear_image = $_FILES['ticket_rear_image']['name'];
if($licence_image != ""){
	$random = rand();
	$licence_image_file_name = $random.time().$licence_image;
	$server_path= "image/".$licence_image_file_name;
	$tmp_path = $_FILES['licence_image']['tmp_name'];
	move_uploaded_file($tmp_path,$server_path);
	
}

if($ticket_front_image != ""){
	$random = rand();
	$ticket_front_image_file_name = $random.time().$ticket_front_image;
	$server_path= "image/".$ticket_front_image_file_name;
	$tmp_path = $_FILES['ticket_front_image']['tmp_name'];
	move_uploaded_file($tmp_path,$server_path);
	
}

if($ticket_rear_image != ""){
	$random = rand();
	$ticket_rear_image_file_name = $random.time().$ticket_rear_image;
	$server_path= "image/".$ticket_rear_image_file_name;
	$tmp_path = $_FILES['ticket_rear_image']['tmp_name'];
	move_uploaded_file($tmp_path,$server_path);
	
}

$val = $_POST['val'];

$insert_query=$conn->query("INSERT INTO traffic_contact_us SET
	fname='".$_POST['fname']."',
	lname='".$_POST['lname']."',
	email='".$_POST['email']."',
	phone='".$_POST['phone']."',
	driving_licence='".$licence_image_file_name."',
	ticket_front_image='".$ticket_front_image_file_name."',
	ticket_rear_image='".$ticket_rear_image_file_name."',
	country='".$_POST['country']."',
	city='".$_POST['city']."',
	description='".$_POST['description']."',
	state='".$_POST['state']."'
	") or die ("error mysql");

?>



	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<form action="<?php echo $val; ?>" method="POST" id="successform">
		<input type="hidden" name="success" value="1">
		<input type="submit" name="">
	</form>
	<script>
		
		document.getElementById("successform").submit();

	</script>
	</body>
	</html>








