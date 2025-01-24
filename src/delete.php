<?php
require_once 'db/connection.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        $message = "Data berhasil dihapus";
    } else {
        $message = "Error menghapus data: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert(message) {
            if (message) {
                Swal.fire({
                    title: 'Informasi',
                    text: message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'read.php';
                    }
                });
            }
        }
    </script>
</head>
<body onload="showAlert('<?php echo $message; ?>')">
    <h2>Hapus Data</h2>
    <form method="POST" action="delete.php">
        <label for="id">Pilih Pengguna:</label>
        <select name="id" id="id" required>
            <option value="">Pilih pengguna</option>
            <?php foreach ($users as $userOption): ?>
                <option value="<?php echo $userOption['id']; ?>">
                    <?php echo $userOption['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="Hapus">
    </form>
    <div style="text-align: center;">
        <a href="read.php">Kembali ke Pengguna</a>
    </div>
</body>
</html>