<?php
$baglanti = new mysqli("localhost", "root", "", "yemek_siparis");

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

$icecek = $_POST['icecek'] ?? '';
$adet = $_POST['adet'] ?? '';
$ad = $_POST['ad'] ?? '';
$adres = $_POST['adres'] ?? '';
$telefon = $_POST['telefon'] ?? '';


$icecek = $baglanti->real_escape_string($icecek);
$adet = (int)$adet;
$ad = $baglanti->real_escape_string($ad);
$adres = $baglanti->real_escape_string($adres);
$telefon = $baglanti->real_escape_string($telefon);


$sql = "INSERT INTO siparisler (icecek, adet, ad, adres, telefon)
        VALUES ('$icecek', $adet, '$ad', '$adres', '$telefon')";

if ($baglanti->query($sql) === TRUE) {
    echo "✅ Sipariş başarıyla kaydedildi.";
} else {
    echo "❌ Hata: " . $baglanti->error;
}

$baglanti->close();
?>
