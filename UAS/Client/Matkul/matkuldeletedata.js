function deletedata() {
    let kdmk = document.getElementById("txkdmk").value;
  
    let dta = "kode="+kdmk;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/UAS/Server/Matkul/dtmatkuldele.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(dta);
    
      
  
    gh.onload = function () {
      const dta = JSON.parse(this.responseText);
      console.log(dta);
      if (dta["sukses"]) {
        document.getElementById("pesan").style.display = "block";
      }
      setTimeout(() => {
        window.location.href = "http://localhost/UAS/Client/main.php?p=matakuliah";
      }, 1500);
    };
  }