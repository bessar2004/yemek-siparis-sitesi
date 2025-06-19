<?php
// 1. Veritabanı bağlantısı
$baglanti = new mysqli("localhost", "root", "", "yemek_siparis");

// Bağlantı kontrolü
if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

// 2. Verileri çek
$sorgu = "SELECT * FROM urunler";
$sonuc = $baglanti->query($sorgu);

$veriler = [];

if ($sonuc->num_rows > 0) {
    while($satir = $sonuc->fetch_assoc()) {
        $veriler[] = $satir;
    }
}

// 3. JSON olarak geri döndür
header('Content-Type: application/json');
echo json_encode($veriler);

// Bağlantıyı kapat
$baglanti->close();
?>
