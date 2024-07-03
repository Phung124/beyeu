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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css"
    />
    <style>
        .card-header {
            font-size: 18px;
            font-weight: bold;
        }
        .card-body textarea {
            width: 100%;
            height: 150px;
            resize: none;
        }
        .file-input-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-control-sm {
            min-width: 100px;
        }
        .btn-block {
            width: 100%;
        }
    </style>
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
      <div id="wpcontent">
        <div class="main-content main" style=" grid-template-columns: 250px 500px 300px; padding-top: 7px;">
        <?php
        include("include/maincongdong.php")
        ?>
          
      </div>

      <?php
      include("include/footer.php")
      ?>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
