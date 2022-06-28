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

        $sql = "INSERT INTO dosen(ID_DOSEN, NAMA_D, JK, ALAMAT, EMAIL, TELP) 
            VALUES('$ID', '$NAMA', '$JK', '$ALAMAT', '$EMAIL', '$TELP');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);