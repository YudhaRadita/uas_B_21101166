<?php
include_once("../dbkoneksi.php");
   $sql = "SELECT KDMK, NAMAMK, SKS, SEMESTER, KODEKLS FROM mk";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);