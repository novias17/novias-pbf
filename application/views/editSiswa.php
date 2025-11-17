<div class="content-wrapper">
    <!-- Content Header (page header) -->
     <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>Edit Data Siswa</strong></h5>
</div>
<div class="card-body">
    <form method="post" action="">
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" value="<?= $edit['nisn']?>" readonly>
        </div>

        <div class="form-group">
            <label for="nm_siswa">Nama siswa</label>
            <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" placeholder="Masukkan Nama Siswa" value="<?= $edit['nm_siswa']?>">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone" value="<?= $edit['no_hp']?>">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <?php if($edit['jenis_kelamin']=='Laki-Laki') :?>
                <option selected value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                <?php else : ?>
                <option value="Laki-Laki">Laki-Laki</option>
                <option selected value="Perempuan">Perempuan</option>
                <?php endif ?>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $edit['alamat']?>">
        </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Ubah Data</button>
                <a href="<?= base_url('siswa');?>"><button type="button" class="btn btn-danger">Batal</button></a>
</form>
    </div>
    </div>
    </div>
    </div>
    </div><!-- /.container-fluid -->