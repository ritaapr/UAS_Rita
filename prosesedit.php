<?php 

session_start();

include("php/config.php");
if(isset($_POST['submit'])){

    $namaTugas = $_POST['namaTugas'];
    $deadline = $_POST['deadline'];
    $keterangan = $_POST['keterangan'];

    $id = $_SESSION['id'];
    $edit_query = mysqli_query($con,"UPDATE list_tugas SET namaTugas='$namaTugas', deadline='$deadline', keterangan='$keterangan' WHERE id=$id ") or die("error occurred");

    if($edit_query){
        echo "<div class='message'>
        <p>Tugas berhasil diupdate!!</p>
        </div> <br>";
        echo "<a href='home.php'><button class='btn'>Go Home</button>";
    }else{
        $id = $_SESSION['id'];
        $query = mysqli_query($con,"SELECT*FROM list_tugas WHERE id=$id ");

        while($result = mysqli_fetch_assoc($query)){
            $res_namaTugas = $result['namaTugas'];
            $res_deadline = $result['deadline'];
            $res_keterangan = $result['keterangan'];
        }
    }
}
header("location:home.php");
?>