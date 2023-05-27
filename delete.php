<?php

include("php/config.php");
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "DELETE FROM list_tugas WHERE id = '$id'";
    $result = mysqli_query($con,$query);

if(!$result) {
    die ("Query gagal dijalankan : ".mysqli_errno($con).
    "-".mysqli_error($con));
    }
}

header("location:home.php");

?>