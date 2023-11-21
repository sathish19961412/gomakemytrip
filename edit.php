
<?php
	require_once 'server.php';
	if(ISSET($_POST['edit'])){
		$id = $_POST['id'];
		// $image_name = $_FILES['file']['name'];
		// $image_temp = $_FILES['file']['tmp_name'];
		$title=$_POST['title'];
        $country=$_POST['country'];
        $subtitle=$_POST['subtitle'];
        $description=$_POST['description'];
	
	
		mysqli_query($conn, "UPDATE `tourslist` set `title`='$title',`country` = '$country', `subtitle` = '$subtitle', `description` = '$description' WHERE `id` = '$id'") or die(mysqli_error());
		echo "<script>alert('User account updated!')</script>";
		header("location:admin_dashboard.php");

	}
?>

