<?php

include("php/config.php");

if (isset($_GET['id'])) {
    $id = ($_GET['id']);
    $query = "SELECT * FROM list_tugas WHERE id = '$id'";
    $result = mysqli_query($con,$query);

if (!$result) {
    die ("Query Error:".mysqli_errno($con).
    "-".mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($result);
    $id= $row["id"];
    $namaTugas = $row["namaTugas"];
    $deadline = $row["deadline"];
    $keterangan = $row["keterangan"];
}else {
    header("Location:home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Tugasmu Disini</title>
</head>
<body class="edit">
    <div class="nav">

    <a href='home.php'> <button class="btn">Batal</button></a>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Edit Your Assignment</header>
            <form action="prosesedit.php" method="post">
                <div class="field input">
                    <label for="namaTugas">Nama Tugas</label>
                    <input type="text" name="namaTugas" id="namaTugas" value="<?php echo $namaTugas; ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="deadline">Deadline</label>
                    <input type="date" name="deadline" id="deadline" value="<?php echo $deadline; ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" value="<?php echo $keterangan; ?>" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>   
            </form>
        </div>
        <?php  ?>
    </div>
</body>
</html>