<?php 
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "restoran_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// CREATE
if (isset($_POST['submit'])) {
    $food = $_POST['food'];
    $banyak_makan = intval($_POST['banyak_makan']);
    $drink = $_POST['drink'];
    $banyak_minum = intval($_POST['banyak_minum']);

    if ($food && $banyak_makan > 0 && $drink && $banyak_minum > 0) {
        $sql = "INSERT INTO pesanan (food, banyak_makan, drink, banyak_minum) VALUES ('$food', '$banyak_makan', '$drink', '$banyak_minum')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Pesanan sedang diproses!');
            document.location.href = 'proses_restoran.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// VIEW
$sql = "SELECT * FROM pesanan";
$result = mysqli_query($conn, $sql);

echo "<h2>Data Pesanan</h2>";
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Makanan</th><th>Banyak Makan</th><th>Minuman</th><th>Banyak Minum</th><th>Aksi</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . htmlspecialchars($row['food']) . "</td>
                <td>" . intval($row['banyak_makan']) . "</td>
                <td>" . htmlspecialchars($row['drink']) . "</td>
                <td>" . intval($row['banyak_minum']) . "</td>
                <td>
                    <form action='proses_restoran.php' method='post' style='display:inline;'>
                        <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                        <button type='submit' class='btn btn-danger'>Hapus</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// DELETE
if (isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    $sql = "DELETE FROM pesanan WHERE id=$delete_id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Pesanan berhasil dihapus!');
        document.location.href = 'proses_restoran.php';
        </script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<div>
    <a href="index.php">
        <button type="submit">Kembali</button>
    </a>
</div>