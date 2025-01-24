<?php
require_once 'db/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: read.php?message=Data berhasil dihapus");
        exit();
    } else {
        echo "Error menghapus data: " . $stmt->error;
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
</head>
<body>
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