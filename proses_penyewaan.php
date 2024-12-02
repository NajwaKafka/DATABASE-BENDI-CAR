<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_penyewa = $_POST['Nama'];
    $kontak = $_POST['No_Telepon'];
    $identitas = $_POST['Identitas'];
    $nama_mobil = $_POST['nama_mobil'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];

        $query = "INSERT INTO penyewa (Nama, No_Telepon, Identitas, nama_mobil, tanggal_pinjam, tanggal_kembali) 
                  VALUES ('$nama_penyewa', '$kontak', '$identitas', '$nama_mobil', '$tanggal_pinjam', '$tanggal_kembali')";

        if (mysqli_query($koneksi, $query)) {
            echo "Data berhasil disimpan.";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
?>
