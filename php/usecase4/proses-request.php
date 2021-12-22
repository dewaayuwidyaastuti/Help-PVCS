<?php
include '../koneksi.php';

$batchNo = $_POST['batchNo'];
$appointmentDate = $_POST['appointmentDate'];
$fullname = $_POST['fullname'];
$status = $_POST['status'];

//ngambil data expdate di tabel batch sesuai dengan batch yang diinputkan user di index4.php
$expDt = mysqli_query($koneksi, "SELECT expiryDate FROM batch WHERE batchNo = '$batchNo'");

//validasi tanggal
if ($expDt->num_rows > 0){
    while ($data = $expDt->fetch_assoc()) {
        $validt = $data ['expiryDate'];
    }
}

if($appointmentDate < $validt) {
    //Nyimpen data ke input ke tabel "vaccination"
    $vaccination = mysqli_query($koneksi, "INSERT INTO vaccination (batchNo, fullname, appointmentDate, status) 
															VALUES ('$batchNo', '$fullname', '$appointmentDate', '$status')");
    //redirect ke halaman view
    if ($vaccination) {
        header("location:index4.php?notif=berhasil");
    }
    else{
        header("location:index4.php?notif=gagal");
    }
}
else{
    header("location:index4.php?notif=gagal");
}
?>