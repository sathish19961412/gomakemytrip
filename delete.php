<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM tourslist WHERE id=$id");
header('Location:admin_dashboard.php');
?>