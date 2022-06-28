<?php
    $output["error"] = true;
   
    if(isset($_GET["kode"])){
        $KODEMK = $_GET["kode"];

        include_once("../dbkoneksi.php");
        $sql = "SELECT KDMK, NAMAMK, SKS, SEMESTER, KODEKLS  FROM mk WHERE KDMK='".$KDMK."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);