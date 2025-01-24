<?php
include 'db/connection.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $email, $id);

    if ($stmt->execute()) {
        $message = "Data berhasil diperbarui";
    } else {
        $message = "Error memperbarui data: " . $stmt->error;
    }

    $stmt->close();
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
} else {
    $user = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
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
    <h2>Ubah Data</h2>
    <form method="GET" action="update.php">
        <label for="id">Pilih Pengguna:</label>
        <select name="id" id="id" onchange="this.form.submit()">
            <option value="">Pilih pengguna</option>
            <?php foreach ($users as $userOption): ?>
                <option value="<?php echo $userOption['id']; ?>" <?php if (isset($user) && $user['id'] == $userOption['id']) echo 'selected'; ?>>
                    <?php echo $userOption['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
    <?php if ($user): ?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>
        <input type="submit" value="Perbarui">
    </form>
    <?php else: ?>
    <p style="text-align: center;">Silakan pilih pengguna untuk diperbarui.</p>
    <?php endif; ?>
    <div style="text-align: center;">
        <a href="read.php">Kembali ke Pengguna</a>
    </div>
</body>
</html>