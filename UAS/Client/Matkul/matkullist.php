<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET","http://localhost/UAS/Server/Matkul/dtmatkul.php");
    gh.send();

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        var tx ='<h3>List Data Matakuliah</h3>';
        tx +='<table class="table table-hover"><thead><tr><th scope="col">#</th><th scope="col">Kode Matakuliah</th><th scope="col">Nama Matakuliah</th><th scope="col">SKS</th><th scope="col">Semester</th><th scope="col">Kode Kelas</th><th scope="col"> <a href="main.php?p=matakuliah&sp=addnewmk" class="badge bg-primary">Baru</a></th></tr></thead><tbody>';

        let nomor = 1;
        for(i=0;i<dta.length;i++){
            tx +='<tr>';
            tx +='  <th scope="row">'+nomor+'</th>';
            tx +='  <td>'+dta[i][0]+'</td>';
            tx +='  <td>'+dta[i][1]+'</td>';
            tx +='  <td>'+dta[i][2]+'</td>';
            tx +='  <td>'+dta[i][3]+'</td>';
            tx +='  <td>'+dta[i][4]+'</td>';
            tx +='  <td> ';
            tx +='<a href="main.php?p=matakuliah&sp=editmatkul&kode='+dta[i][0]+'" class="badge bg-success">edit</a> ';
            tx +='<a href="main.php?p=matakuliah&sp=delematkul&kode='+dta[i][0]+'" class="badge bg-danger">hapus</a> ';
            tx +='</td>';
            tx +='</tr>';
            nomor++;
        }    
        tx +='  </tbody></table>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>