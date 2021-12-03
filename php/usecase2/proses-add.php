<?php
    include '../koneksi.php';

    $batchNo = $_POST['batchNo'];
    $vaccineID = $_POST['vaccineID'];
    $centreName = $_POST['centreName'];
    $expiryDate = $_POST['expiryDate'];
    $quantityAvailable = $_POST['quantityAvailable'];

    $query = mysqli_query($koneksi, "INSERT INTO batch (batchNo, vaccineID, centreName, expiryDate, quantityAvailable)
                                            VALUES ('$batchNo', '$vaccineID', '$centreName', '$expiryDate', '$quantityAvailable')");

    if($query){
        header("location:index.php?notif=berhasil");
    }else{
        header("location:index.php?notif=gagal");
    }
?>