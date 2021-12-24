<?php
include '../koneksi.php';

$vaccinationID = $_POST['vaccinationID'];
$batchNo = $_POST['batchNo'];

//Confrim
mysqli_query($koneksi, "UPDATE vaccination SET status = 'Confirmed' WHERE vaccinationID = '$vaccinationID'");


//Record

header("location:../usecase5/index5.php?message=success");
?>
