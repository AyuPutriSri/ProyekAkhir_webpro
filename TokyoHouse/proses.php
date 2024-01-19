<?php
require_once 'Reservasi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nomber = $_POST["nomber"];
    $tanggal = $_POST["tanggal"];
    $pesan = $_POST["pesan"];

    $reservasi = new Reservasi();

    if ($reservasi->submitReservasi($nama, $email, $nomber, $tanggal, $pesan)) {
        // Menampilkan pesan sukses dan mengarahkan kembali ke halaman utama
        echo "Reservasi berhasil dikirim! Terima kasih atas reservasinya.";
        header("Location: index.html");
        exit();
    } else {
        echo "Terjadi kesalahan saat mengirim form.";
    }
}
?>
