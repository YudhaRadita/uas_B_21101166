<h3>Hapus Data Dosen <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">ID Dosen</label>
        <input type="text" class="form-control" id="txid" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama" disabled>
    </div>
<div id="sembunyi">
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select" disabled>
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
</div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" id="txalamat" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" id="txemail" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">No Telepon</label>
        <input type="text" class="form-control" id="txtelp" disabled>
    </div> 
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="deletedata()" class="btn btn-danger">Hapus Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    document.getElementById("sembunyi").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/UAS/Client/main.php?p=dosen")
}
</script>
<script src="http://localhost/UAS/Client/dosen/dosencaridata.js"></script>
<script src="http://localhost/UAS/Client/dosen/dosendeletedata.js"></script>