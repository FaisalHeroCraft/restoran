<?php 
    $servername="PPW";
    $username="root";
    $password="";
    $dbname="dblatihan";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    
    $sql = "INSERT INTO peserta (nama, email, tanggal_lahir, gender, alamat, no_hp, jenis_kursus, jadwal) Values ('Em Faisal', 'Laki-laki', '2003-01-01', 'faisal@gmail.com', 'Jl. Merdeka', '081234567890', 'Programming', 'Senin 10:00-12:00'),
('JB', 'Perempuan', '1992-02-02', 'jane@gmail.com', 'Jl. Sejahtera', '089876543210', 'Design', 'Rabu 14:00-16:00')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Data Berhasil Disimpan!');
            document.location.href = 'view_user.php; </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    $sql = "SELECT * FROM peserta";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nama</th><th>Email</th><th>Tanggal Lahir</th><th>Gender</th><th>Alamat</th><th>No HP</th><th>Jenis Kursus</th><th>Jadwal</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nama"]. "</td><td>" . $row["email"]. "</td><td>" . $row["tanggal_lahir"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["alamat"]. "</td><td>" . $row["no_hp"]. "</td><td>" . $row["jenis_kursus"]. "</td><td>" . $row["jadwal"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

    mysqli_close($conn);
    ?>