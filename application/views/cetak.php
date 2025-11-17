<!-- Font Awesome Icons -->
 <link rel="stylesheet" href="<?php echo base_url("assets/") ?>plugins/fontawesome-free/css/all.min.css">
 <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/") ?>dist/css/adminlte.min.css">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <section class="content-header">
            <div class="container-fluid">
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card">

                    <div class="card-body p-3">
                        <center>
                            <table width="100%">
                                <tr>
                                    <td>
                                        <img src="<?= base_url('assets/dist/img/avatar.png') ?>" 
                                        alt="" width="100" height="100">
                                    </td>
                                    <td align="center">
                                        <strong>
                                            PRAKTIK KERJA INDUSTRI<BR>
                                            KOTA PANGKALPINANG <BR>
                                            ISB ATMA LUHUR
                                        </strong><br>
                                        Alamat: Jl. Raya Selindung Gabek
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/dist/img/avatar.png') ?>" 
                                        alt="" width="100" height="100">
                                    </td>
                                </tr>
                            </table>
                        </center>
                        <hr color="black">
                        <strong><center> BUKTI JADWAL PRAKERIN </center></strong>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td width="200">NISN</td>
                                    <td>: <?= $jadwal_prakerin['nisn'] ?> </td>
                                </tr>
                                <tr>
                                    <td width="200">Kode Jadwal Prakerin</td>
                                    <td>: <?= $jadwal_prakerin['kdjadwalprakerin'] ?> </td>
                                </tr>
                                <tr>
                                    <td width="200">Tahun Ajaran</td>
                                    <td>: <?= $jadwal_prakerin['tahun_ajaran'] ?> </td>
                                </tr>
                                <tr>
                                    <td width="200">Semester</td>
                                    <td>: <?= $jadwal_prakerin['semester'] ?> </td>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <div class="bg-primary color-palette"><span>DETAIL Jadwal Prakerin</span>
                        </div>
        <table class="table table-striped">
            <thead>
                <th>No</th>
                <th>KD Jadwal Prakerin</th>
                <th>KD Tempat Prakerin</th>
                <th>Nama Tempat Prakerin</th>
                <th>Unit Kerja</th>
                <th>Jam Kerja</th>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($get_isi as $isi): ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $isi['kdjadwalprakerin'] ?></td>
                    <td><?= $isi['kdtempatprakerin'] ?></td>
                    <td><?= ucwords($isi['nmtempatprakerin']) ?></td>
                    <td><?= $isi['unit_kerja'] ?></td>
                    <td><?= $isi['jam_kerja'] ?></td>
                </tr>
                <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</section>
</div>
<div class="col-lg-3"></div>
</div>