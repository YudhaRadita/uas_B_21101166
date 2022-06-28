<h3>Hapus Data Matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" class="form-control" id="txkdmk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnamamk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <select id="txsks" class="form-select" disabled>
            <option value="SKS1"> 2 </option>
            <option value="SKS2"> 3</option>
            <option value="SKS3"> 4</option>
            <option value="SKS6"> 6</option>
        </select>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <select id="txsms" class="form-select" disabled>
            <option value="S1"> 1 </option>
            <option value="S2"> 2</option>
            <option value="S3"> 3</option>
            <option value="S4"> 4</option>
            <option value="S5"> 5</option>
            <option value="S6"> 6</option>
            <option value="S7"> 7</option>
            <option value="S8"> 8</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Kode Kelas</label>
        <input type="text" class="form-control" id="txkodekls" disabled>
    </div>

    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="deletedata()" class="btn btn-danger">Hapus Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    // document.getElementById("sembunyi").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/UAS/Client/main.php?p=matakuliah")
}
</script>
<script src="http://localhost/UAS/Client/Matkul/matkulcaridata.js"></script>
<script src="http://localhost/UAS/Client/Matkul/matkuldeletedata.js"></script>