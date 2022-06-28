let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kode = urlP.get("kode");

let urltarget = new URL("http://localhost/UAS/Server/Matkul/dtmatkulkode.php");
urltarget.searchParams.set("kode",kode);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txkdmk").value = dta["isi"][i][0];
        document.getElementById("txnamamk").value = dta["isi"][i][1];
        document.getElementById("txsks").value = dta["isi"][i][2];
        document.getElementById("txsms").value = dta["isi"][i][3];
        document.getElementById("txkodekls").value = dta["isi"][i][4];
    }

}