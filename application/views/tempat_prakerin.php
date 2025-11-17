<div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0"><strong>Data Tempat Prakerin</strong></h5>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('pesan');?>
                            <a href="<?= base_url('tempat_prakerin/tambahtp'); ?>"><span class="btn btn-primary btn-sm">Tambah Data</span></a><br><br>
                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <tr bgcolor="#0099FF">
                                        <th style="width:10px">No</th>
                                        <th>Kode Tempat Prakerin</th>
                                        <th>Nama Tempat Prakerin</th>
                                        <th>Alamat</th>
                                    <th bgcolor="#000000" style="color:white;"><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody bgcolor="#CCCCCC">
                                  <?php $no = 1; ?>
                                  <?php foreach ($data_tempat_prakerin as $isi) : ?>
                                  <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $isi['kdtempatprakerin'] ?></td>
                                    <td><?= $isi['nmtempatprakerin'] ?></td>
                                    <td><?= $isi['alamat'] ?></td>
                                    <td bgcolor="#333333"><center>
                                    <a href="<?= base_url('tempat_prakerin/edittp/') . $isi['kdtempatprakerin'] ?>" class="badge bg-warning">Edit</a>
                                    <a href="<?= base_url('tempat_prakerin/hapus/') . $isi['kdtempatprakerin'] ?>" class="badge bg-danger" onclick="return confirm('Yakin?')">Hapus</a></center>
                                </td>
                            </tr>
                            <?php $no++?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>