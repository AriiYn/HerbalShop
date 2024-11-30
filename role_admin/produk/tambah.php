<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi | HalalMart</title>
    <link rel="stylesheet" href="../../css/login_.css">
</head>
<form method="POST" action="proses.php" class="needs-validation" novalidate>
<body id="bg-login">
    <div class="form-login">
        <h2>Tambah Data Produk</h2>
            <input type="text" name="id_product" placeholder="Id Product" class="form-control" id="validationCustom01" required>
            <div class="form-group">
              <select class="form-control" name="id_kelas" id="validationCustom01" required>
                <option selected disabled value="">Pilih Kategori...</option>
                <?php 
                include("../../koneksi.php");
                $sql = mysqli_query($koneksi,"SELECT * FROM tb_category");
                while($jb = mysqli_fetch_array($sql)){
                ?>
                <option value="<?php echo $jb['id_category'] ?>"><?php echo $jb['nama_category']; ?></option>
                <?php } ?>
              </select>
            </div>
            <input type="text" name="product_name" placeholder="Nama Produk" class="form-control" id="validationCustom01" required>
            <input type="text" name="product_price" placeholder="Harga Produk" class="form-control" id="validationCustom01" required>
            <input type="file" name="product_image" placeholder="Gambar Produk" class="form-control" id="validationCustom01" required>
            <textarea name="product_description" placeholder="Deskripsi Produk" class="form-control" id="validationCustom01"></textarea>
            <div class="form-group">
              <select class="form-control" name="jenis_kelamin" id="validationCustom01" required>
                <option selected disabled value="">Pilih Status...</option>
                <option value="laki-laki">Aktif</option>
                <option value="perempuan">Tidak Aktif</option>
              </select>
            </div>
            <button type="submit">Submit</button>
            <a>Ingin Kembali? <a href="data_pelanggan.php">Kembali</a>
        </div>
        </form>
    </body>
    <script>
(function() {
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');

    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>