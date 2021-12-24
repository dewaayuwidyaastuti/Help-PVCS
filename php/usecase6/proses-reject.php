<?php
include '../koneksi.php';

$vaccinationID = $_POST['vaccinationID'];
$batchNo = $_POST['batchNo'];


//Reject
mysqli_query($koneksi, "UPDATE vaccination SET status = 'Rejected' WHERE vaccinationID = '$vaccinationID'");
mysqli_query($koneksi, "UPDATE batch SET quantityAvailable = quantityAvailable + 1 WHERE batchNo = '$batchNo'");

//Record

header("location:../usecase5/index5.php?message=success");
?>
