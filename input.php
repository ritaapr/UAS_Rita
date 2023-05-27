<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body class="inputan">
    <div class="container">
        <div class="box form-box">
            <header>Ada tugas apa hari ini?</header>
            <form action="prosesinput.php" method="post">
            <div class="field input">
                <label for="id">ID</label>
                <input type="number" name="id" id="id" placeholder="Masukkan sebuah ID/Nomor" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="namaTugas">Nama Tugas</label>
                <input type="text" name="namaTugas" id="namaTugas" placeholder="Isi tugasmu disini" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" placeholder="Belum dikerjakan/Sudah dikerjakan" autocomplete="off" required>
            </div>
            <div class="field">
                <input type="submit" class="btn" name="submit" value="Add New Assigment" required>
            </div>   
            </form>
        </div>
    </div>
</body>
</html>