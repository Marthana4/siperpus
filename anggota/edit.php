<?php
include'../koneksi.php';
include'../aset/header.php';

$id_anggota = $_GET['id_anggota'];
$query = mysqli_query($kon, "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota= '$id_anggota'");
$anggota = mysqli_fetch_assoc($query);
?>

<div class="container">
	<div class="row mt-4">
		<div class="col md-4">
			<div class="card">
				<div class="card-header">
					<h3><i class="fad fa-users"></i>Edit Data</h3>
				</div>
				<div class="card-body">
					<form action="proses-edit.php" method="post">
                    <input type="hidden" name="id_anggota" value="<?php echo $anggota['id_anggota']; ?>" placeholder="Judul" required>
						<div class="form-group">
                    		<input type="text" class="form-control" name="nama" value="<?php echo $anggota['nama']; ?>" placeholder="Nama">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="kelas" value="<?php echo $anggota['kelas']; ?>" placeholder="Kelas">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="telp" value="<?php echo $anggota['telp']; ?>" placeholder="Telp">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="username" value="<?php echo $anggota['username']; ?>" placeholder="Username">
                		</div>
                		<div class="form-group">
                    		<input type="password" class="form-control" name="password" value="<?php echo $anggota['password']; ?>" placeholder="Password">
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