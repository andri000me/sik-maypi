<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Edit Pelunasan UN</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
				    <label>Nama</label>
				    <input type="text" class="form-control" name="nama" value="<?= $pelunasan_un['nama']; ?>" required>		 
				  </div>
				  <div class="form-group">
				    <label>Tanggal</label>
				    <input type="date" class="form-control" name="tanggal" value="<?= $pelunasan_un['tanggal']; ?>" required>
				  </div>
				  <div class="form-group">
				    <label>Nominal (Rupiah)</label>
				    <input type="number" class="form-control" name="nominal" value="<?= $pelunasan_un['nominal']; ?>" required>
				  </div>
				  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>