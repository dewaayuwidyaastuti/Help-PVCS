<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "help_pcvs_db";

    $koneksi = mysqli_connect($host, $user, $password, $db);
    if (!$koneksi){
        die("Maaf, koneksi terkendala: ".mysqli_connect_error());
    }
?>

