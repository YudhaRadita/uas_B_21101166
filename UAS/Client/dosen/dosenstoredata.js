function storedata(){
    let id = document.getElementById("txid").value;
    let nama = document.getElementById("txnama").value;
    let jkel = document.getElementById("txjkel").value;
    let alamat = document.getElementById("txalamat").value;
    let email = document.getElementById("txemail").value;
    let telp = document.getElementById("txtelp").value;

    let dta = "id="+id+"&nama="+nama+"&jkel="+jkel+"&alamat="+alamat+"&email="+email+"&telp="+telp;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/UAS/Server/dosen/dtdsnstore.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/UAS/Client/main.php?p=dosen";
        },1500);
    }

}