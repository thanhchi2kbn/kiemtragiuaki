<?php
    // Bước 01: Kết nối Server:
    //Định nghĩa Hằng số trong PHP
    define('SITEURL','http://localhost/kiemtra');
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB_NAME','danhba');
    define('PORT','3306');
    $conn = mysqli_connect(HOST,USER,PASS,DB_NAME);
    mysqli_set_charset($conn, 'UTF8');
    if(!$conn){
        die("Không thể kết nối: ".mysqli_connect_error());
    }
?>