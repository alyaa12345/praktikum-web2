<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    // update user data
    $result = mysqli_query($con, "UPDATE mata_kuliah SET
kode='$kode',nama='$nama',sks='$sks',semester='$semester' WHERE id=$id");
    // Redirect to homepage to display updated user in list
    header("Location:?page=mata_kuliah-show");
}
