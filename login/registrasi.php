<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi | HalalMart</title>
    <link rel="stylesheet" href="../css/login_.css">
</head>
<form method="POST" action="simpan.php" class="needs-validation" novalidate>
<body id="bg-login">
    <div class="form-login">
        <h2>Registrasi</h2>
            <input type="text" name="nama" placeholder="Nama" class="form-control" id="validationCustom01" required>
            <input type="text" name="username" placeholder="Username" class="form-control" id="validationCustom01" required>
            <input type="password" name="password" placeholder="Password" class="form-control" id="validationCustom01" required>
            <button type="submit">Submit</button>
            <a>Sudah Punya Akun? <a href="Index.php">Login</a>
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