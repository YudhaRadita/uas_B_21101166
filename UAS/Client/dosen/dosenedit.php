<h3>Edit Data Dosen <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Perbaharui
</div>
<form>
<div class="mb-3">
        <label class="form-label">ID Dosen</label>
        <input type="text" class="form-control" id="txid" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama" placeholder="Isikan Nama Lengkap">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" id="txalamat" placeholder="Isikan Alamat">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" id="txemail" placeholder="Isikan Email">
    </div>
    <div class="mb-3">
        <label class="form-label">No Telepon</label>
        <input type="text" class="form-control" id="txtelp" placeholder="Isikan No Telepon">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="updatedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/UAS/Client/main.php?p=dosen")
}
</script>
<script src="http://localhost/UAS/Client/dosen/dosencaridata.js"></script>
<script src="http://localhost/UAS/Client/dosen/dosenupdatedata.js"></script>