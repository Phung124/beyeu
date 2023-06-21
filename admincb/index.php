<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styleadmincb.css">
    <title>Admin</title>
</head>
<body>
    <h1  class="title_admin">Chào mừng tới trang Admin</h1>
    <div id="wrapper">
    <?php
    include("config/config.php");
    include("model/header.php");
    include("model/menuthucpham.php");
    include("model/mainthucpham.php");
    include("model/footer.php");
    
    ?>
    </div>
  
</body>
</html>