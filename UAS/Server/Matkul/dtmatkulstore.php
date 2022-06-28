<?php
    include_once("../dbkoneksi.php");

    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODEMK=$_POST["kode"];
        $NAMAMK=$_POST["nama"];
        $SKS=$_POST["sks"];
        $SEMESTER=$_POST["smstr"];
        $KODEKLS=$_POST["kodekls"];


        $sql = "INSERT INTO mk(KDMK, NAMAMK, SKS, SEMESTER, KODEKLS) 
            VALUES('$KODEMK', '$NAMAMK','$SKS','$SEMESTER','$KODEKLS');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);