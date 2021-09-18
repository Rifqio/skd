<?php 
$conn = mysqli_connect("localhost","root","","skd");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>