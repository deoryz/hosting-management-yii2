Hosting Management with YII2
===============================

Hosting Management with YII2 adalah aplikasi yang bertujuan untuk memanage akun hosting dan domain, serta berguna juga untuk billing akun hosting

Project ini masih dalam masa pengerjaan, belum versi beta

Bagaimana Cara Kontribusi
-------------------------------
Untuk bisa berkontribusi di project ini, kamu bisa Fork terlebih dahulu dan setelah itu bisa membaca file excel yang ala kadarnya [di sini](https://docs.google.com/spreadsheets/d/1WJrDoVhHFO6zJVxowzJtl24THeVqcb_-5MUdOn1zQQ4/edit?usp=sharing)

Requirement
-------------------------------
1. PHP 5.6 ke atas
1. Menggunakan Yii2
1. MySql 5 ke atas

Cara Installasi
-------------------------------

Clone repository ini atau download

Buka folder menggunakan cmd lalu jalankan perintah

    composer global require "fxp/composer-asset-plugin:^1.2.0"
    composer install

buat database menggunakan MySql untuk aplikasi ini

copy file common/config/main-local-template.php lalu rename menjadi main-local.php dan sesuaikan dengan koneksi ke database anda
    
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=manage_hosting',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ],
    
Lalu lakukan migrasi database dengan menjalankan perintah

    php yii migrate
    



