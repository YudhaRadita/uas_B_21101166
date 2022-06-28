<?php
    $output["error"] = true;
   
    if(isset($_GET["id"])){
        $ID = $_GET["id"];

        include_once("../dbkoneksi.php");
        $sql = "SELECT ID_DOSEN, NAMA_D, JK, ALAMAT, EMAIL, TELP FROM dosen WHERE ID_DOSEN='".$ID."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);