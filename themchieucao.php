<?php
include('admincb/config/config.php');
session_start();
$user = $_SESSION['username'];
$sql_chiucao = "SELECT * FROM cannang 
where  cannang.username = '$user'";
$query_chiucao = mysqli_query($mysqli, $sql_chiucao);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <link rel="stylesheet" href="assets/css/golden.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css"
    />
  </head>
  <body>
    <div id="warpper">
      <div id="header">
        <div class="header--">
        <?php 
        include("include/header.php");
        include("include/menu.php");
        ?>
        </div>
      </div>
      <div id="wpcontentd"  style=" display: flex; justify-content: center;">
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sổ Chiều Cao</title>
    <link rel="stylesheet" href="lich.css">

</head>
<body>
    <div class="containerlt" style="position: absolute;">
        <div class="form-containerlt">
            <h2>Nhập Chiều Cao</h2>
            <form id="cannang" action="xulithemchiucao.php" method="POST">                
                <label for="date">Ngày:</label>
                <input type="date" id="date" name="date" required>

                <label for="height">Chiều Cao</label>
                <input type="number" step="0.1" id="height" name="height" required>
               
                
                <button  type="submit" name="themchiucao">Thêm Chiều Cao</button>
            </form>
        </div>
        <div class="container1lt">
        <h1>Quản lí chiều cao</h1>
        <table>
            <thead>
                <tr>
                    <th>Ngày</th>
                    <th>chiều cao</th>
                
                </tr>
            </thead>
            <tbody>
            <?php

while ($row = mysqli_fetch_array($query_chiucao)) {


?>          
                <!-- Thêm dữ liệu tĩnh vào đây -->
                <tr>
                 
                    <td><?php echo $row['ngay'] ?></td>
                    <td><?php echo $row['chiucao1'] ?></td>
                
        
                </tr>
              <?php }
              ?>
            </tbody>
        </table>
    </div>
    </div>

    
</body>
</html>
          
      </div>
      
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>