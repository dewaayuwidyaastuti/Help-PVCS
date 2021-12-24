<?php
include '../koneksi.php';

$batchNo = $_POST['batchNo'];
$appointmentDate = $_POST['appointmentDate'];
$fullname = $_POST['fullname'];
$status = $_POST['status'];
$vaccineName = $_POST['vaccineName'];
$manufacturer = $_POST['manufacturer'];
$countpending = $_POST['status'];
$vaccinationID = $_POST['vaccinationID'];

//ngambil data expdate di tabel batch sesuai dengan batch yang diinputkan user di index4.php
$expDt = mysqli_query($koneksi, "SELECT expiryDate FROM batch WHERE batchNo = '$batchNo'");

