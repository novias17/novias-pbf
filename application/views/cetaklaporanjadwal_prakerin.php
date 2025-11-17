<div class="content-wrapper">
    <!-- Content Header (page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>CETAK LAPORAN JADWAL PRAKERIN</strong></h5>
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('pesan');?>
                <form action="laporan/cetak/" method="get">

                    <label>Tahun ajaran</label>
                    <select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
                        <option>-- Pilih --</option>

                        <?php
                            foreach ($get_tahun_ajaran as $tahun_ajaran) {
                                echo '<option value="' . $tahun_ajaran['tahun_ajaran'] . '">' . $tahun_ajaran['tahun_ajaran'] . '</option>';
                            }
                        ?>

                    </select><br />
                    <label>Semester</label>
                    <select name="semester" id="semester" class="form-control" target="_blank">
                        <option>-- Pilih --</option>

                        <?php
                            foreach ($get_semester as $semester) {
                                echo '<option value="' . $semester['semester'] . '">' . $semester['semester'] . '</option>';
                            }
                        ?>

                    </select><br />
                    
                    <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div><!-- /.container-fluid -->