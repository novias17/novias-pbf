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

                                    <td align="center">
                                        <strong>
                                            PRAKTIK KERJA INDUSTRI<BR>
                                            KOTA PANGKALPINANG <BR>
                                            ISB ATMA LUHUR
                                        </strong><br>
                                        Alamat : Jl. Raya Selindung Gabek
                                    </td>

                                </tr>
                            </table>
                        </center>
                        <hr color="black">
                        <strong><center> LAPORAN JADWAL PRAKERIN</center></strong>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td width="200">&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="200">Tahun Ajaran</td>
                                    <td>: <?= $tahun_ajaran ?> </td>
                                </tr>
                                <tr>
                                    <td width="200">Semester</td>
                                    <td>: <?= $semester ?> </td>
                                </tr>
                            </thead>
                        </table>
                        <br>

                        <table class="table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>KD Tempat Prakerin</th>
                                <th>Nama Tempat Prakerin</th>
                                <th>Unit Kerja</th>
                                <th>Jam Kerja</th>
                                
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($daftar_laporan as $isi): ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $isi['nm_siswa'] ?></td>
                                    <td><?= $isi['kdtempatprakerin'] ?></td>
                                    <td><?= ucwords($isi['nmtempatprakerin']) ?></td>
                                    <td><?= $isi['unit_kerja'] ?></td>
                                    <td><?= $isi['jam_kerja'] ?></td>
                                </tr>
                                <?php $no++ ?>
                                <?php endforeach ?>
                            </tbody>
                            <table width="100%">
								<tr>
									<td></td><td></td><td>Pangkalpinang, <?= date('d-m-Y') ?></td>
								</tr>
								<tr>
									<td></td>
									<td width="70%"></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pemilik<br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________</td>
								</tr>
							</table>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-3"></div>
</div>
<script>window.print();</script>