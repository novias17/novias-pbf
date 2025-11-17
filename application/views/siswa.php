<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (page header) -->
     <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>Data Siswa</strong></h5>
</div>
<div class="card-body">
    <?= $this->session->flashdata('pesan');?>
    <a  href="<?= base_url('siswa/tambahsi');?>"><span class="btn btn-primary btn-sm">Tambah Data</span></a><br><br>
    <table class="table table-striped table-advance table-hover">
        <thead>
            <tr bgcolor="#0099FF">
                <th style="width:10px">No</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Nomor Handphone</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th bgcolor="#000000" style="color:white;"><center>Action</center></th>
</tr>
</thead>
<tbody bgcolor="#CCCCCC">
    <?php $no=1;?>
    <?php foreach ($data_siswa as $isi) :?>
        <tr>
            <td><?= $no?></td>
            <td><?= $isi['nisn']?></td>
            <td><?= $isi['nm_siswa']?></td>
            <td><?= $isi['no_hp']?></td>
            <td><?= $isi['jenis_kelamin']?></td>
            <td><?= $isi['alamat']?></td>
            <td bgcolor="#333333"><center>
                <a href="<?= base_url('siswa/editsi/').$isi['nisn'] ?>"><span class="badge bg-warning">Edit</span></a>
                <a href="<?= base_url('siswa/hapus/').$isi['nisn'] ?>"><span class="badge bg-danger" onclick="return confirm('Yakin?')">Hapus</span></a></center>
    </td>
    </tr>
    <?php $no++?>
    <?php endforeach ?>
    </tbody>
    </table>

    </div>
    </div>
    </div>
    </div><!-- /.container-fluid -->
    </div>