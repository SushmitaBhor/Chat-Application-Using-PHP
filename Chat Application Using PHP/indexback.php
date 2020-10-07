<?php
	if(isset($_POST['upload'])){
	
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_tem_loc = $_FILES['file']['tmp_name'];
	$file_store = "upload/".$file_name;

	move_uploaded_file($file_tem_loc, $file_store);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Download PDF using PHP from HTML Link</title>
</head>
<body>
	<center>
		<h2 style="color:#d7385e;">Welcome To Chat Application</h2>
		<p><b>Click below to download file </b></p>

		<a href="upload/".$file_name target="_bhor">Download file now</a>
	</center>

</body>
</html>