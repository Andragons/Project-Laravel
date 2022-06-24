<?php

include 'koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM data_customer WHERE id = $id");

if ($hapus === TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("Data telah terhapus");';
    echo 'window.location.href="halaman_admin.php";';
    echo "</script>";
  } else {
    echo "<script>";
    echo "alert('Data Gagal Dihapus');". $koneksi->error;
    echo "window.location.href='halaman_admin.php'";
    echo "</script>";
  }
  
  $koneksi->close();

?>