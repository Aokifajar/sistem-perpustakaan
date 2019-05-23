<?php
include"../inc/koneksi.php";
if (isset($_POST['simpan'])) {
  $nama_anggota=$_POST['nama_anggota'];
  $id_buku=$_POST['id_buku'];
  $tanggal=$_POST['tanggal'];
  $query=mysqli_query($con,"INSERT INTO peminjaman VALUES('','$id_buku','$nama_anggota','$tanggal')");
  if ($query) {
    echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=peminjaman";</script>';
  }
}

?>
<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Tambah Peminjaman</font></h2>
      <hr>
      <div class="col-md-8">
        <form method="post" action="">
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" id="nim"placeholder="Nim" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" 
          name="nama_anggota" id="nama_anggota" placeholder="nama anggota" required=""><br>
          <select  class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="id_buku">
          <option value="" selected="selected">Pilih</option>
          <?php
          $query =mysqli_query($con,"SELECT * FROM buku");
            while ($data = mysqli_fetch_array($query))
            {
            echo "<option value='".$data['id_buku']."'>".$data['nama_buku']."</option>";
            } 
            ?>
            </select>
            <br>
          <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="tanggal"
          placeholder="tanggal" required=""><br>      
          <br>
          <button class="btn btn-primary btn-lg" type="submit" name="simpan">Simpan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
		$(function() {
			$("#nim").change(function(){
				var nim = $("#nim").val();

				$.ajax({
					url: 'ajak_peminjam.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'nim': nim
					},
					success: function (siswa) {
						$("#nama_anggota").val(siswa['nama_anggota']);
					}
				});
			});
		});
	</script>
	</div>
</body>
</html>