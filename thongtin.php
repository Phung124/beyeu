
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông Tin Trẻ Em hoặc Mẹ Bầu</title>
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
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #e0f7fa; /* Màu xanh nhạt */
      margin: 0;
      padding: 0;
    }
    .container5 {
      max-width: 800px;
      margin: 50px auto;
      background: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      border: 2px solid #9c27b0; /* Viền màu tím */
    }
    .header5 {
      background-color: #9c27b0; /* Màu tím */
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 24px;
    }
    .button-container5 {
      display: flex;
      justify-content: center;
      margin: 20px 0;
    }
    .button-container5 button {
      margin: 0 10px;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      background-color: #9c27b0; /* Màu tím */
      color: white;
    }
    .button-container5 button:hover {
      background-color: #7b1fa2; /* Màu tím đậm khi hover */
    }
    .form-section {
      display: none;
      padding: 20px;
    }
    .form-section.active {
      display: block;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin-bottom: 5px;
      margin-top: 10px;
    }
    input, select {
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    input[type="submit"] {
      width: auto;
      background-color: #9c27b0; /* Màu tím */
      color: white;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      align-self: flex-start;
    }
    input[type="submit"]:hover {
      background-color: #7b1fa2; /* Màu tím đậm khi hover */
    }
  </style>
</head>
<body>
<?php 
include('admincb/config/config.php');
session_start();
$user = $_SESSION['username'];

        $sql = "SELECT child_info_submitted, mother_info_submitted FROM member WHERE username='$user'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        
        $child_info_submitted = $row['child_info_submitted'];
        $mother_info_submitted = $row['mother_info_submitted'];
        ?>
<?php 
        include("admincb/config/config.php");
        include("include/header.php");
        include("include/menu.php");
       
        ?>
  <div class="container5">
    <div class="header5">Điền Thông Tin</div>
    <div class="button-container5">
      <button onclick="showForm('childForm')">Thông Tin Trẻ Em</button>
      <button onclick="showForm('motherForm')">Thông Tin Mẹ Bầu</button>
    </div>

    <div id="childForm" class="form-section active">
      <h2>Thông Tin Trẻ Em</h2>
      <form method="POST" action="thongtinct.php">
        <label for="childName">Tên Trẻ Em:</label>
        <input type="text" id="childName" name="childName" placeholder="Nhập tên trẻ em">
        
        <label for="childBirthDate">Ngày Sinh:</label>
        <input type="date" id="childBirthDate" name="childBirthDate">
        
        <label for="childGender">Giới Tính:</label>
        <select id="childGender" name="childGender">
          <option value="Nam">Nam</option>
          <option value="Nữ">Nữ</option>
          <option value="other">Khác</option>
        </select>
        
        <input type="submit" name="dangbaiviet" value="Gửi">
      </form>
      <a href="congdong.php">Bạn đã điền thông tin rồi 
      </a>
    </div>

    <div id="motherForm" class="form-section" >
      <h2>Thông Tin Mẹ Bầu</h2>
      <form method="POST" action="thongtinct.php">
        <label for="motherName">Tên Mẹ Bầu:</label>
        <input type="text" id="motherName" name="motherName" placeholder="Nhập tên mẹ bầu">
        
        <label for="dueDate">Ngày Dự Sinh:</label>
        <input type="date" id="dueDate" name="dueDate">
        
        <input type="submit" name="dangbaiviet1" value="Gửi">
      </form>
      <a href="congdong.php">Bạn đã điền thông tin rồi 
      </a>
    </div>
  </div>

  <script>
    function showForm(formId) {
      document.getElementById('childForm').classList.remove('active');
      document.getElementById('motherForm').classList.remove('active');
      document.getElementById(formId).classList.add('active');
    }
  </script>
</body>
</html>
