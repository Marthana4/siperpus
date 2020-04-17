<?php
include '../aset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col md-4">
			<div class="card">
				<div class="card-header">
					<h3><i class="far fa-user-plus"></i> Tambah Data</h3>
				</div>
				<div class="card-body">
					<form action="proses-tambah.php" method="post">
						<div class="form-group">
                    		<input type="text" class="form-control" name="nama" placeholder="Nama">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="kelas" placeholder="Kelas">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="telp" placeholder="Telp">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="username" placeholder="Username">
                		</div>
                		<div class="form-group">
                    		<input type="password" class="form-control" name="password" placeholder="Password">
                		</div>
                		<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>


					</form>
				</div>
			</div>
		</div>
	</div>
</div>
 
<?php
include '../aset/footer.php';
?>