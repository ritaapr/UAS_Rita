<?php 
session_start();

include("php/config.php");
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $namaTugas = $_POST['namaTugas'];
    $deadline = $_POST['deadline'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO list_tugas VALUES ($id,'$namaTugas','$deadline','$keterangan')";
    $result = mysqli_query($con,$query);

    if(!$result) {
        die ("Query gagal dijalankan : ".mysqli_errno($con)."-".mysqli_error($con));
    }   
}

header("location:home.php");
?>