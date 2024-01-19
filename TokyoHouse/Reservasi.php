<?php
require_once 'db_config.php';

class Reservasi {
    private $conn;

    public function __construct() {
        global $koneksi;
        $this->conn = $koneksi;
    }

    public function submitReservasi($nama, $email, $nomber, $tanggal, $pesan) {
        $stmt = $this->conn->prepare("INSERT INTO form_reservation (nama, email, nomber_hp, tanggal_reservasi, pesan) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $email, $nomber, $tanggal, $pesan);

        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
}
?>
