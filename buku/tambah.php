<?php
include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($kon, "SELECT*FROM kategori");

?>
<div class="container">
	<div class="row mt-4">
		<div class="col md-4">
			<div class="card">
				<div class="card-header">
					<h3><i class="fas fa-books-medical"></i>Tambah Data</h3>
				</div>
				<div class="card-body">
					<form action="proses-tambah.php" method="post">
						<div class="form-group">
                    		<input type="text" class="form-control" name="judul" placeholder="Judul">
                		</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
                        </div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="pengarang" placeholder="Pengarang">
                		</div>
                        <div class="form-group">
                            <textarea class="form-control" name="ringkasan" placeholder="Ringkasan">
                            
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="cover" placeholder="Cover">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="stok" placeholder="Stok">
                        </div>
                        <div class="form-group">
                            <select name="id_kategori">
                                <option>--Pilih Kategori--</option>
                                <?php 
                                while ($kategori = mysqli_fetch_assoc($query)):
                                ?>
                                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                <?php
                                    endwhile;
                                ?>
                            </select>

                        </div>
                		<button type="submit" class="btn btn-primary mr-auto" name="simpan">Simpan</button>


					</form>
				</div>
			</div>
		</div>
	</div>
</div>
 
<?php
include '../aset/footer.php';
?>