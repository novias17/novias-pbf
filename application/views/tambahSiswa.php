<div class="content-wrapper">
    <!-- Content Header (page header) -->
     <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>Tambah Data siswa</strong></h5>
</div>
<div class="card-body">
    <?= $this->session->flashdata('pesan');?>
    <form method="post" action="">
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN">
        </div>
        <div class="form-group">
            <label for="nm_siswa">Nama siswa</label>
            <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" placeholder="Masukkan Nama siswa">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
        </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">SIMPAN</button>
                <a href="<?= base_url('siswa');?>"><button type="button" class="btn btn-danger">Batal</button></a>
</form>
    </div>
    </div>
    </div>
    </div>
    </div><!-- /.container-fluid -->