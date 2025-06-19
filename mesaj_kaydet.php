<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$baglanti = new mysqli("localhost", "root", "", "yemek_siparis");

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

$ad     = $baglanti->real_escape_string($_POST['ad'] ?? '');
$email  = $baglanti->real_escape_string($_POST['email'] ?? '');
$mesaj  = $baglanti->real_escape_string($_POST['mesaj'] ?? '');

$sql = "INSERT INTO iletisim_formu (ad, email, mesaj) VALUES ('$ad', '$email', '$mesaj')";

if ($baglanti->query($sql) === TRUE) {
    echo "Mesaj başarıyla gönderildi!";
} else {
    echo "Hata: " . $baglanti->error;
}

$baglanti->close();
?>
