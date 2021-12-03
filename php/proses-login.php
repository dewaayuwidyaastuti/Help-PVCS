<?php
    session_start();
    include "koneksi.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    //Proses Session
    $sess = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    while ($row = mysqli_fetch_array($sess)){
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['centreName'] = $row['centreName'];
        $_SESSION['username'] = $username;
    }

    //Proses Login
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password ='$password'");
    $validlogin = mysqli_num_rows($query);

    if($validlogin > 0){
        $user = mysqli_fetch_assoc($query);
        if($user['level'] == "administrator"){
            header("location:../dashboard-admin.php");
        }else{
            header("location:../dashboard-patient.php");
        }
    }else{
        header("location:../login.php?notif=gagal");
    }
?>