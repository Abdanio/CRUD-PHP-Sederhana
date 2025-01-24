<?php
require_once 'db/connection.php';

function fetchRecords($conn) {
    $sql = "SELECT * FROM users"; // Replace 'users' with your actual table name
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

$records = fetchRecords($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h1>Data Pengguna</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($records as $record): ?>
        <tr>
            <td><?php echo $record['id']; ?></td>
            <td><?php echo $record['name']; ?></td>
            <td><?php echo $record['email']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $record['id']; ?>">Ubah</a>
                <a href="delete.php?id=<?php echo $record['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <button onclick="window.location.href='../index.php'">Kembali ke Menu</button>
</body>
</html>