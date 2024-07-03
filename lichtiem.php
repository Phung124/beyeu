<?php
include('admincb/config/config.php');
session_start();
$user = $_SESSION['username'];
$sql_lichtiem = "SELECT * FROM lichtiem 
where lichtiem.child_info_submitted ='1' and lichtiem.username = '$user'";
$query_lichtiem = mysqli_query($mysqli, $sql_lichtiem);


function sendReminderEmails($mysqli) {
    $query = "SELECT * FROM lichtiem, member WHERE member.username = lichtiem.username and member.email and  DATE(lichtiem.ngaytiem) = DATE_ADD(CURDATE(), INTERVAL 1 DAY)";
    $result = mysqli_query($mysqli, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $to = $row['email']; // Giả sử bạn có cột email trong bảng lichtiem
        $subject = 'Nhắc nhở lịch tiêm chủng';
        $message = "Chào " . $row['username'] . ",\n\nĐây là nhắc nhở rằng bạn có lịch tiêm vào ngày mai (" . $row['ngaytiem'] . ") cho loại vaccine " . $row['tenloai'] . ". Vui lòng đến đúng giờ.\n\nTrân trọng,\nĐội ngũ y tế";
        $headers = 'From: 6051071095@st.utc2.edu.vn';

        mail($to, $subject, $message, $headers);
        if (mail($to, $subject, $message, $headers)) {
            echo "Email nhắc nhở đã được gửi tới " . $row['email'] . "<br>";
        } else {
            echo "Gửi email thất bại tới " . $row['email'] . "<br>";
        }
    }
}

// Gọi hàm gửi email khi truy cập trang
sendReminderEmails($mysqli);
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
    <title>Lịch Tiêm Chủng</title>
    <link rel="stylesheet" href="lich.css">

</head>
<body>
    <div class="containerlt" style="position: absolute;">
        <div class="form-containerlt">
            <h2>Nhập Lịch Tiêm Chủng</h2>
            <form id="vaccineForm" action="xulilichtiem.php" method="POST">
                <label for="vaccineName">Tên Mũi Tiêm:</label>
                <input type="text" id="vaccineName" name="vaccineName" required>
                
                <label for="vaccineDate">Ngày Tiêm:</label>
                <input type="date" id="vaccineDate" name="vaccineDate" required>

                <label for="vaccineTime">Giờ Tiêm:</label>
                <input type="time" id="vaccineTime" name="vaccineTime" required>

                <label for="vaccineMonth">Tháng Tiêm:</label>
                <input type="number" id="vaccineMonth" name="vaccineMonth" required>
                
                <label for="vaccineso">Số Mũi:</label>
                <input type="number" id="vaccineso" name="vaccineso" required>

                <label for="vaccineNotes">Ghi Chú:</label>
                <input type="text" id="vaccineNotes" name="vaccineNotes">
               
                
                <button  type="submit" name="themlichtreem">Thêm Lịch</button>
            </form>
        </div>
        <div class="container1lt">
        <h1>Lịch Tiêm</h1>
        <table>
            <thead>
                <tr>
                    <th>Tên Vaccine</th>
                    <th>Ngày tiêm</th>
                    <th>giờ tiêm</th>
                    <th>Tháng tiêm thứ</th>
                    <th>Số mũi</th>
                    <th>Ghi Chú</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
            <?php

while ($row = mysqli_fetch_array($query_lichtiem)) {


?>          
                <!-- Thêm dữ liệu tĩnh vào đây -->
                <tr>
                    <td><?php echo $row['tenloai'] ?></td>
                    <td><?php echo $row['ngaytiem'] ?></td>
                    <td><?php echo $row['giotiem'] ?></td>
                    <td><?php echo $row['thangtiem'] ?></td>
                    <td><?php echo $row['somui'] ?></td>
                    <td><?php echo $row['ghichu'] ?></td>
                    <td>
                                <form action="xulitrangthai.php" method="POST">
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['idlichtiem']; ?>">
                                    <input type="hidden" name="status" value="<?php echo $row['status'] == 'chưa tiêm' ? 'đã tiêm' : 'chưa tiêm'; ?>">
                                    <button type="submit" class="status-button">
                                        <?php echo $row['status']; ?>
                                    </button>
                                </form>
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