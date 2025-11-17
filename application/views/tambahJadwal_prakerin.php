<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (page header) -->
     <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>Tambah Data jadwal Prakerin</strong></h5>
</div>
<div class="card-body">
    <?= $this->session->flashdata('pesan');?>


    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <label>Kode Jadwal Prakerin</label>
            <input type="text" name="kdjadwalprakerin" id="kdjadwalprakerin" class="form-control"
            value="<?= $kdjadwalprakerin ?>" readonly>
            
        </div>
        <div class="form-group">
            <label>Tahun Ajaran</label>
            <select class="form-control" id="tahun_ajaran" name="tahun_ajaran">
                <option>2023/2024</option>
                <option>2024/2025</option>
                <option>2025/2026</option>
            </select>
        <?php echo form_error('tahun_ajaran', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label>Semester</label>
            <select class="form-control" id="semester" name="semester">
                <option>Ganjil</option>
                <option>Genap</option>
        </select>
        <?php echo form_error('semester', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        <div class="form-group">
            <label>NISN</label>
            <select name="nisn" class="form-control">
                <option>--Pilih--</option>

                <?php
                foreach ($get_siswa as $siswa) {
                    echo '<option value="' . $siswa['nisn'] . '">' . $siswa['nisn'] . '--' . $siswa['nm_siswa'] . '</option>';
                }
                ?>
                
</select>
            </div>

            </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered dataTable" aria-describedby="editable-sample_info">
                <thead>
                    <tr>
                        <th style="width: 5px">No</th>
                        <th style="width: 150px">Kode</th>
                        <th>Nama Tempat Prakerin</th>
                        <th>Unit Kerja</th>
                        <th>Jam Kerja</th>
                        <th style="width: 150px">Action</th>
                        <!--ubah jadi 150px-->
            </tr>
            </thead>
            <tbody>
                <tr id="footer_jadwal_prakerin">
                    <td style="text-align:right" colspan="8">
                        <a class="btn btn-success" id="add_row_jadwal_prakerin">Tambah</a>
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            <!--tutup class=row-->
            <br><br>
            <div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
            </div>
            </div>

</form>
    </div>
    </div>
    </div>
    </div>
    </div><!-- /.container-fluid -->
    <script>
	var index_table = 0;
	var tempat_prakerin_select = '';

	<?php
	$jsArray = "var namatempat_prakerin = new Array();\n";

	foreach ($get_tempat_prakerin as $br) { ?>
		tempat_prakerin_select += '<option value="<?php echo $br['kdtempatprakerin']; ?>"><?php echo $br['kdtempatprakerin']; ?></option>';
		<?php
		$jsArray .= "namatempat_prakerin['" . $br['kdtempatprakerin'] . "'] = {nmtempat_prakerin:'" . addslashes($br['nmtempatprakerin']) . "'};\n"
		?>
	<?php
	}
	?>


	var no = 1;
	$("#add_row_jadwal_prakerin").click(function() {
		index_table++;
		$("#footer_jadwal_prakerin").before('<tr class="data_jadwal_prakerin" id="row_jadwal_prakerin_' + index_table + '" class="small_data">\n\
        <td style="text-align:center">\
             ' + no + '\n\
        </td>\n\
        <td>\n\
              <select style="max-width:300px" name="kdtempatprakerin[' + index_table + ']" onclick="changeValue(this.value)" id="tempat_prakerin' + index_table + '" class="form-control small_data">' + tempat_prakerin_select + '\n\
              </select>\n\
        </td>\n\
        <td>\n\
            <input style="max-width:300px" name="nmtempatprakerin['+index_table+']" type="text" \n\ class="bigdrop form-control small_data" id="nmtempatprakerin'+index_table+'" readonly="readonly">\n\
        </td>\n\
        </td>\n\
        <td>\n\
            <input style="max-width:200px" name="unit_kerja[' + index_table + ']" type="text" \n\
            class="bigdrop form-control small_data" id="unit_kerja[' + index_table + ']">\n\        </td>\n\
        </td>\n\
        <td>\n\
            <input style="max-width:200px" name="jam_kerja[' + index_table + ']" type="text" \n\
            class="bigdrop form-control small_data" id="jam_kerja[' + index_table + ']">\n\
            </td>\n\
            <td>\n\
                   <a onclick="remove_div_id(\'row_jadwal_prakerin_' + index_table + '\',1);" class="btn btn-danger">\n\
                   <i class="fa fa-minus"></i></a>\n\
                </td></tr>');
        no++;

	});

	function remove_div_id(id) {
        $('#' + id).remove();
    }

    <?php echo $jsArray; ?>

    function changeValue(kdtempatprakerin) {
        
        document.getElementById('nmtempatprakerin' + index_table).value = namatempat_prakerin[kdtempatprakerin].nmtempat_prakerin;
        

    };
</script>