<?php
include'../koneksi.php';
include'../aset/header.php';

$id_buku = $_GET['id_buku'];
$query = mysqli_query($kon, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku= '$id_buku' ");
$buku = mysqli_fetch_assoc($query);
?>
<div class="container">
	<div class="row mt-4">
		<div class="col md-4">
			<div class="card">
				<div class="card-header">
					<h3><i class="fas fa-books-medical"></i>Detail Buku</h3>
				</div>
				<div class="card-body">
					
                    <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku']; ?>" required>
						<div class="form-group">
                    		<input type="text" class="form-control" name="judul" value="<?php echo $buku['judul']; ?>" placeholder="Judul" required>
                		</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="penerbit" value="<?php echo $buku['penerbit']; ?>" placeholder="Penerbit" required>
                        </div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="pengarang" value="<?php echo $buku['pengarang']; ?>" placeholder="Pengarang" required>
                		</div>
                        <div class="form-group">
                            <textarea class="form-control" name="ringkasan"
                            value="<?php echo $buku['ringkasan']; ?>" placeholder="Ringkasan">
                            
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="cover" value="<?php echo $buku['cover']; ?>" placeholder="Cover">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="stok" value="<?php echo $buku['stok']; ?>" placeholder="Stok" required>
                        </div>
                        <div class="form-group">
                            <select name="id_kategori" required>
                                <option>--Pilih Kategori</option>
                                <?php 
                                $query = mysqli_query($kon, "SELECT*FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku=id_buku");
                                while ($kategori = mysqli_fetch_assoc($query)){
                                ?>
                                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                <?php
                            };
                            ?>
                            </select>

                        
			</div>
		</div>
	</div>
</div>
<?php
include '../aset/footer.php';
?>