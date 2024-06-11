<?php
include "../connection.php";
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM mata_kuliah WHERE id=$id") or die(mysqli_error($con));
header("Location:../admin/?page=mata_kuliah-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=mata_kuliah-show'>";