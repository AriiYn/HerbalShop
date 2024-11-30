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
        <h2>Tambah Data Kategori</h2>
            <input type="text" name="id_category" placeholder="Id Kategori" class="form-control" id="validationCustom01" required>
            <input type="text" name="nama_category" placeholder="Nama Kategori" class="form-control" id="validationCustom01" required>
            <button type="submit">Submit</button>
            <a>Ingin Kembali? <a href="data_kategori.php">Kembali</a>
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