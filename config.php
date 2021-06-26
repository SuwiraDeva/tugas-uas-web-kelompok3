<?php
error_reporting(0);
date_default_timezone_set('Asia/Kuala_Lumpur');
session_start();
/* Data akun mysql (nama server, nama user, passsword, nama database) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'uasweb');
/* Menyambungkan kepada database sql */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


function bersihkan_angka($angka){
    $hasil_bersihkan = preg_replace('/[^0-9\-]/', '', $angka);
    return $hasil_bersihkan;
}

$direktori = "tugas_uas_web/";
$direktori_admin = "tugas_uas_web/admin/";
?>
