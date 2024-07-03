<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include("thuvien.php");
$fullname=$_SESSION['fullname'];
$usertimkiem=$_GET['username'];
$user=$_SESSION['username'];
$_SESSION['usertimkiem']=$usertimkiem;
 $userChat=$_SESSION['usertimkiem'];
echo $userChat;
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
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css"
    />
    <style>
        body {
            font: 12px arial;
            color: #222;
            text-align: center;
            padding: 35px;
            background-color: #f0f2f5;
        }
        form, p, span {
            margin: 0;
            padding: 0;
        }
        input {
            font: 12px arial;
        }
        a {
            color: #0000FF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        #wrapper, #loginform {
            margin: 0 auto;
            padding-bottom: 25px;
            background: #fff;
            width: 504px;
            border: 1px solid #ACD8F0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #loginform {
            padding-top: 18px;
        }
        #loginform p {
            margin: 5px;
        }
        #chatbox {
            text-align: left;
            margin: 0 auto;
            margin-bottom: 25px;
            padding: 10px;
            background: #fff;
            height: 270px;
            width: 430px;
            border: 1px solid #ACD8F0;
            overflow: auto;
            border-radius: 8px;
        }
        #usermsg {
            width: 395px;
            border: 1px solid #ACD8F0;
            border-radius: 8px;
            padding: 5px;
        }
        #submit {
            width: 60px;
            border-radius: 8px;
            padding: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .error {
            color: #ff0000;
        }
        #menu {
            padding: 12.5px 25px;
        }
        .welcome {
            float: left;
        }
        .logout {
            float: right;
        }
        .msgln {
            margin: 0 0 2px 0;
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
    <div id="wpcontent"  style=" margin-bottom: 70px;">
        <script src="https://code.jquery.com/jquery-1.4.2.js"></script>
        <div id="wrapper">
            <div id="menu">
                <?php
            $user = $_SESSION['username'];
$sql = "SELECT * FROM member 
where  member.username = '$_GET[username]'";
$query= mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($query)) {
       

       ?>
              <div style=" width: 170px;">
                <img src="<?php echo $row['Anh'];?>"  class="rounded-circle" class="rounded-lg" class="img-fluid rounded-circle" 
                style="width:35px; height:35px;margin-bottom: 5px;"><strong> <?php echo $row['fullname'];?> </strong>
                </div>
                <div style="clear:both"></div>
            </div>   
            
            <div id="chatbox">
                <div class="main-chat"></div>
            </div>
            <input name="usermsg" type="text" id="usermsg" size="63" />
            <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
        </div>
        <?php
        }
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#submitmsg").click(function() {    
                    var usermsg = $("#usermsg").val();
                    $.post("LuuTN.php", {usermsg: usermsg}, function(data) {});
                    $("#usermsg").val("");    
                });  
            });
        </script>
        <script> 
            $.ajaxSetup({cache: false});
            setInterval(function() {
                $('.main-chat').load('LoadTN.php');
            }, 1000);
        </script>
    </div>
    <?php
    include("include/footer.php");
    ?>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
