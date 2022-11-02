<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="stylepesanan.css">
    <title>Form Menarik</title>
</head>
<body>
  <div class="form-style-3">
  <form action="index.html">
    <fieldset>
                  <legend>Pesanan</legend>
                  <label for="field1"><span>Nama </span>: <?php echo $_POST['field1']; ?></label>
                  <label for="field2"><span>Jumlah Pesanan</span>: <?php echo $_POST['field2']; ?></label>
                  <label for="field3"><span>Ukuran</span>: <?php echo $_POST['field3']; ?></label>
                  <label for="field4"><span>Tambahan Topping</span>: <?php echo $_POST['field4']; ?></label><br>
                  <label for="field5"><span>Keterangan</span>: <?php echo $_POST['field5']; ?></label>
              </fieldset>

  </form>
  </div>
</body>
</html>