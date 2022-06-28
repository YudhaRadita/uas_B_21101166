<?php
    include_once("../dbkoneksi.php");
    
    $r["sukses"]=false;

    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODEMK=$_POST["kode"];
        $NAMAMK=$_POST["nama"];
        $SKS=$_POST["sks"];
        $SEMESTER=$_POST["smstr"];
        $KODEKLS=$_POST["kodekls"];

        $sql="UPDATE mk SET 
                NAMAMK='".$NAMAMK."',
                SKS='".$SKS."',
                SEMESTER='".$SEMESTER."',
                KODEKLS='".$KODEKLS."'
                WHERE KDMK='".$KODEMK."'";

        mysqli_query($cnn,$sql);
        $r["sukses"]=true;
    }
    echo json_encode($r);