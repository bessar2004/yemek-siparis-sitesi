# yemek-siparis-sitesi


Yemek Sipariş Sistemi (Web Projesi)

Bu proje, kullanıcıların çevrim içi olarak yemek siparişi verebildiği, PHP ve MySQL kullanılarak geliştirilen bir web uygulamasıdır. Sistem, HTML/CSS ile oluşturulan bir arayüz üzerinden kullanıcıdan alınan verilerin, PHP aracılığıyla MySQL veritabanına kaydedilmesini sağlar. Proje, XAMPP üzerinde geliştirilmiş ve yerel sunucuda çalıştırılmıştır.

1- Projede Kullandığımız Teknolojiler

HTML5 – Sayfa iskeleti ve formlar

CSS3 – Görsel tasarım ve responsive yapı

JavaScript – (Opsiyonel olarak kullanılabilir) etkileşimli özellikler

PHP – Sunucu taraflı veri işleme (formdan verileri alıp veritabanına kaydetme)

MySQL – Sipariş ve iletişim verilerinin saklandığı veritabanı

phpMyAdmin – Veritabanı yönetimi

XAMPP – Apache ve MySQL’i çalıştırmak için lokal sunucu ortamı

Git & GitHub – Versiyon kontrolü ve proje yayını

2- Uygulamanın Ana Özellikleri

* Sipariş Sistemi

Kullanıcı ad, adres, telefon ve ürün bilgilerini girerek sipariş verebilir.

Formdan gelen veriler siparis_kaydet.php dosyası ile siparisler tablosuna kaydedilir.

* İletişim Formu

Kullanıcılar “İletişim” sayfasından ad, e-posta ve mesaj göndererek bize ulaşabilir.

Veriler mesaj_kaydet.php dosyası ile iletisim_formu tablosuna kaydedilir.

* Menü Sayfası

Hamburger, pizza, kebap, lahmacun gibi ürünlerin görselleri ile menü oluşturulmuştur.

Görseller kart düzeninde yerleştirilmiş ve responsive yapı korunmuştur.

* Veritabanı Yapısı

siparisler tablosu: id, ad, adres, telefon, ürün bilgileri

iletisim_formu tablosu: id, ad, email, mesaj

* Dosya Yapısı

proje/
├── site.html
├── siparis.html
├── contant.html
├── hakkimizda.html
├── mesaj_kaydet.php
├── siparis_kaydet.php
├── sayfa2.js
├── reng.css
├── /img
│   ├── hamburger.png
│   ├── pizza.png
│   ├── kebap.png
│   └── ...

3- Yayın Süreci

Git kurulumu yapıldı.

git init ile proje dizini Git ile başlatıldı.

add ve commit işlemleri yapıldı.

GitHub'da özel bir depo oluşturuldu.

remote tanımlandı ve push ile proje dosyaları GitHub’a yüklendi.
