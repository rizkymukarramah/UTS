<?php

$servername = "localhost";
$username = "id13981613_k3518053";
$password = "5W)Vk4(4k7$va#<l";
$dbname = "id13981613_mathk3518053game";

// --- koneksi ke database
$koneksi = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());

// --- Fngsi tambah data (Create)
function tambah($nama, $email, $skor){
    $sql = "INSERT INTO game (id, nama, email, skor) VALUES(NULL, '".$nama."','".$email."','".$skor."')";
    if (mysqli_query($GLOBALS['koneksi'], $sql)) {
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
      }
    mysqli_close($GLOBALS['koneksi']);
}


?>
