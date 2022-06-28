function deletedata(){
    let id = document.getElementById("txid").value;
    
    let dta = "id="+id;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/UAS/Server/dosen/dtdsndel.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/UAS/Client/Main.php?p=dosen";
        },1500);
    }

}