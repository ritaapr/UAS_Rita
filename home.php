<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body class="home" id="home">
  <div class="nav">
    <div class="logo">
      <p><a href="home.php"></a> </p>
    </div>

    <div class="right-links">
      <?php 

      $id = $_SESSION['id'];
      $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

      while($result = mysqli_fetch_assoc($query)){
        $res_Uname = $result['Username'];
        $res_id = $result['Id'];
      }

      ?>

    <a href='input.php?Id=$res_id'> <button class="btn"> Add New Assignment</button></a>
    <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

    </div>
    </div>

    <main>
      <div class="main-box top">
        <div class="top">
          <p>Hai <b><?php echo $res_Uname ?></b>!<br>Catat pekerjaan rumahmu disini dan jangan lupa kerjakan secepatnya ya!</br></p>
        </div>
        <div class="bottom">
          <table class="table">
            <thead>
              <tr>
                <th>NO.</th>
                <th>NAMA TUGAS</th>
                <th>DEADLINE</th>
                <th>KETERANGAN</th>
                <th>ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include("php/config.php");
                $query = "SELECT * FROM list_tugas";
                $result = mysqli_query($con, $query);
                if(!$result){
                  die("Invalid query!");
                }

                while($row = mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  echo "<td>$row[id]</td>";
                  echo "<td>$row[namaTugas]</td>";
                  echo "<td>$row[deadline]</td>";
                  echo "<td>$row[keterangan]</td>";
                echo '<td>
                <a href="edit.php?id='.$row['id'].'">Edit </a> /
                <a href="delete.php?id='.$row['id'].'"
                  onclick="return confirm(\'Anda Yakin Akan Menghapus Data?\')">Hapus</a> 
                </td>';
                echo '</tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
    </main>
  </section>
</body>
</html>