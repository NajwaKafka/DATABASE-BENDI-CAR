<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penyewa</title>
</head>
<body>
    <h1>Tambah Penyewa</h1>
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" id="alamat" required><br><br>

        <label for="no_telepon">No Telepon:</label><br>
        <input type="text" name="no_telepon" id="no_telepon" required><br><br>

        <label for="identitas">Identitas:</label><br>
        <input type="text" name="identitas" id="identitas" required><br><br>

        <button type="submit" name="submit">Tambah</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_telepon = $_POST['no_telepon'];
        $identitas = $_POST['identitas'];

        $sql = "INSERT INTO penyewa (Nama, Alamat, No_Telepon, Identitas) 
                VALUES ('$nama', '$alamat', '$no_telepon', '$identitas')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>

    <h2>Daftar Penyewa</h2>
    <table border="1">
        <tr>
            <th>ID Penyewa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Identitas</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM penyewa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['ID_Penyewa']}</td>
                    <td>{$row['Nama']}</td>
                    <td>{$row['Alamat']}</td>
                    <td>{$row['No_Telepon']}</td>
                    <td>{$row['Identitas']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
