<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
</head>
<body>
    <h2>Data yang anda masukkan:</h2>
    <?php
    if (isset($_POST['food']) && isset($_POST['banyak_makan']) && isset($_POST['drink']) && isset($_POST['banyak_minum'])) {
        echo "Makanan: " . htmlspecialchars($_POST['food']) . " Jumlah: " . intval($_POST['banyak_makan']) . "<br>";
        echo "Minuman: " . htmlspecialchars($_POST['drink']) . " Jumlah: " . intval($_POST['banyak_minum']);
    } else {
        echo "Tidak ada data yang diinputkan.";
    }
    ?>
    <div class="row">
                  <div class="col text-right">
                    <button type="submit" name="submit" value="Submit" class="btn btn-success px-5">Pesan</button>
                  </div>
                </div>
</body>
</html>
