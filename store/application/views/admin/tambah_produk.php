<div class="container">
	<div class="row">
		<div class="col">
			<h1>Tambah Produk</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col">
				<form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
					<div class="form-group">
						<div class="row">
							<label class="control-label col-md-3 col-sm-12">Nama Produk</label>
							<input type="text" name="nama_produk" class="form-control col-md-6 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="control-label col-md-3">Harga Produk</label>
							<input type="text" name="harga_produk" class="form-control col-md-6">
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="control-label col-md-3">Stok Produk</label>
							<input type="text" name="stok_produk" class="form-control col-md-6">
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="control-label col-md-3">Status Produk</label>
							<select class="form-control col-md-2 col-sm-4" name="status_produk">
								<option value="1000">Ready</option>
								<option value="1000">Not Ready</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="control-label col-md-3">Gambar Produk</label>
							<input type="file" name="gambar_produk" class="form-control-file col-md-6">
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="control-label col-md-3">Deskripsi Produk</label>
							<textarea name="deskripsi" class="form-control col-md-6" id="" cols="30" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6 offset-md-3 col-sm-12" style="padding:0; !important">
								<a href="#" class="btn btn-danger">Batal</a>
								<button type="submit" value="Submit" class="btn btn-success">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>