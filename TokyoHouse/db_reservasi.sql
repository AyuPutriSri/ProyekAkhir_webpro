CREATE TABLE form_reservation (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    nomber_hp VARCHAR(20) NOT NULL,
    tanggal_reservasi DATE NOT NULL,
    pesan TEXT,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
