<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 11</title>
</head>
<body>
    <div class="page-register">
        <h2>Isi Data Diri</h2>
        <form action="view_user.php" method="post">
        <div class="row">
            <div class="form-group">
                <label for="">ID: </label>
                <input type="text" name="id" id="id" readonly> 
            </div>
            <div class="form-group">
                <label for="">Nama Lengkap: </label>
                <input type="text" name="name" id="mame"> 
            </div>
            <div class="form-group">
                <label for="">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir: </label>
                <input type="date" name="date" id="date">
            </div>
            <div class="form-group">
                <label for="">Gender: </label>
                <input type="text" name="gender" id="gender">
            </div>
            <div class="form-group">
                <label for="">Alamat: </label>
                <input type="text" name="alamat" id="alamat">
            </div>
            <div class="form-group">
                <label for="">No HP: </label>
                <input type="number" name="number" id="number">
            </div>
            <div class="form-group">
                <label for="">Jenis Kursus: </label>
                <input type="text" name="kursus" id="kursus">
            </div>
            <div class="form-group">
                <label for="">Jadwal: </label>
                <input type="text" name="jadwal" id="jadwal">
            </div>
            <td colspan="2">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="cancel" value="Cancel">
            </td>
        </div>
        </form>
    </div>
    
    <script>
        
    </script>
</body>
</html>
