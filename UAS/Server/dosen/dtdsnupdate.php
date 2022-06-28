<?php
    include_once("../dbkoneksi.php");
    
    $r["sukses"]=false;
    if(isset($_POST["id"])){
        $ID=$_POST["id"];
        $NAMA=$_POST["nama"];
        $JK=$_POST["jkel"];
        $ALAMAT=$_POST["alamat"];
        $EMAIL=$_POST["email"];
        $TELP=$_POST["telp"];

        $sql = "UPDATE dosen SET 
            NAMA_D='".$NAMA."',
            JK='".$JK."',
            ALAMAT='".$ALAMAT."',
            EMAIL='".$EMAIL."',
            TELP='".$TELP."',
            WHERE ID_DOSEN='".$ID."'";

        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);