<?php
$id=$_GET['id'];
$connection = mysqli_connect('localhost','root','','login');
$query = "DELETE FROM setdata WHERE id='$id'";
mysqli_query($connection, $query);
header("location:../index.php");
?>