function updatedata() {
    let kode = document.getElementById("txkdmk").value;
    let nama = document.getElementById("txnamamk").value;
    let sks = document.getElementById("txsks").value;
    let sms = document.getElementById("txsms").value;
    let kodekls = document.getElementById("txkodekls").value;
  
    let dta = "kode="+kode+"&nama="+nama+"&sks="+sks+"&semester="+sms+"&kodekls="+kodekls;
    const gh = new XMLHttpRequest();
    gh.open("post", "http://localhost/UAS/Server/Matkul/dtmatkulupdate.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(dta);
    // console.log(dta);
  
    gh.onload = function () {
      const dta = JSON.parse(this.responseText);
  
      if (dta["sukses"]) {
        document.getElementById("pesan").style.display = "block";
      }
      setTimeout(() => {
        window.location.href = "http://localhost/UAS/Client/main.php?p=matakuliah";
      }, 1500);
    };
  }