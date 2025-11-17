	<div class="content-wrapper">

		<div class="content-header">
			<div class="container-fluid">
				  <div class="card card-primary card-outline">
					<div class="card-header">
						<h5 class="m-0"><strong>Edit Data Tempat Prakerin</strong></h5>
					</div>
					<div class="card-body">
						<form method="post" action="">
							<div class="form-group">
								<label for="kdtempatprakerin">Kode Tempat Prakerin</label>
								<input type="text" class="form-control" id="kdtempatprakerin" name="kdtempatprakerin" placeholder="Masukkan Kode Tempat Prakerin" value="<?= $edit['kdtempatprakerin']?>" readonly>
							</div>
							<div class="form-group">
								<label for="nmtempatprakerin">Nama Tempat Prakerin</label>
								<input type="text" class="form-control" id="nmtempatprakerin" name="nmtempatprakerin" placeholder="Masukkan Nama Tempat Prakerin" value="<?= $edit['nmtempatprakerin']?>">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $edit['alamat']?>">
							</div>
							<button type="submit" name="submit" id="submit" class="btn btn-primary">Ubah Data</button>
							<a href="<?= base_url('tempat_prakerin'); ?>"><button type="button" class="btn btn-danger">Batal</button></a>
							</form>
							</div>
							</div>
							</div>