<?php
    include_once("../dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KDMK=$_POST["kode"];
        
        $sql = "DELETE FROM mk WHERE KDMK='".$KDMK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);