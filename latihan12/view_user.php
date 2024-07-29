<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 11</title>
</head>
<body>
    <h2>Data yang anda masukkan:</h2>
    <?php 
    echo "ID: " . $_POST['id'] . "<br>";
    echo "Nama: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Tanggal Lahir: " . $_POST['date'] . "<br>";
    echo "Gender: " . $_POST['gender'] . "<br>";
    echo "Alamat: " . $_POST['alamat'] . "<br>";
    echo "No HP: " . $_POST['number'] . "<br>";
    echo "Jenis Kursus: " . $_POST['kursus'] . "<br>";
    echo "Jadwal: " . $_POST['jadwal'] . "<br>"; 
    ?>
    </body>
</html>