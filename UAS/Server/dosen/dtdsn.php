<?php
include_once("../dbkoneksi.php");
   $sql = "SELECT ID_DOSEN, NAMA_D, JK, ALAMAT, EMAIL, TELP FROM dosen";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);