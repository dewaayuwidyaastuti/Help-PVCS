<?php
    include "koneksi.php";
    $ICPassport = $_POST["ICPassport"];
    $username   = $_POST["username"];
    $fullname   = $_POST["fullname"];
    $password   = $_POST["password"];
    $email      = $_POST["email"];
    $level      = $_POST["level"];

    $validUsername = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'"));

    if($validUsername > 0){
        header("location:../signup-admin.php?notif=validusername");
    }else{
        // Masukin inputan dari user ke tabel 'user' di database 'ayu'
        $query = "INSERT INTO user (username, password, fullname, email, ICPassport, level) 
                    values ('$username', '$password', '$fullname', '$email', '$ICPassport', '$level')";
        $result = mysqli_query($koneksi, $query);

        if($result){
            header("location:../login.php?notif=berhasil");
        }else{
            header("location:../signup-admin.php?notif=gagal");
        }
    }
?>