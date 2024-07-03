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
  <?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('admincb/config/config.php');
    
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $_SESSION['txtUsername'] =$username;
    $time = time();
    $time_check = $time-600; 
  
        if (mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM online WHERE username ='$username' ")) > 0)
        {
    
          $mysqli->query("UPDATE online SET time='$time' WHERE username = '$username'");
        }
        else
        {
          $mysqli->query("INSERT INTO online(username, time)VALUES('$username', '$time')");
        }

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) 
    {
        echo "Vui lòng nhập đầy đủ user và mật khẩu. <a href='login.php'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    if (mysqli_num_rows(mysqli_query($mysqli,"SELECT username,password FROM member WHERE username='$username' and password='$password' "))==0) 
    {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='DangNhap.php'>Trở lại</a>";
        exit;
    }
     else
     {
    //Lưu tên đăng nhập
   $_SESSION['username'] = $_POST['txtUsername'];
    header('Location: thongtin.php');
    
    die();
        
     }
}
?>
    <div id="warpper">
      <div id="header">
        <div class="header--">
        <div class="container justify-content-between">
          <a href="" id="logo"
            ><img src="assets/images/Community_logo.png" alt="" />
          </a>
          <!-- end logo -->
          <form action="j" id="search">
            <input type="text" name="p" placeholder="Bạn muốn tìm gì?" />
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
        <div class="container justify-content-between">
          <nav>
            <ul id="main-menu" class="d-flex row">
              <li><a href="">Trang chủ</a></li>
            
              <li><a href="">Theo dõi</a></li>
              <li><a href="">Thực Phẩm</a></li>
              <li><a href="">Tiêm chủng</a></li>
              
            </ul>
          </nav>
          <ul id="main-menu" class="d-flex row">
            <li><a href="login.php">Đăng nhập</a></li>
            <li><a href="register.php">Đăng kí</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="wpcontent">
        <div class="main-content">
     <div class="main-contenttt login-register "style="background-color: #fafafa">
        <div class="login-register-container" style>
            <div class="login-by-facebook-container">
                <div class="img-preview-wrapper">
                    <img src="https://beyeu.com/public/img/login.svg" alt="Image Preview">
                </div>
        </div>
        <div class="login-facebook-wrapper">
            <span class="login-facebook-wrapper-title">Đăng nhập</span>
            <div class="auth-form-container">
                <form action="login.php" method="POST">       
               <div class="auth-form-group">
                
                <i class="fa-solid fa-user"></i>
                
                        <input type="text" class="auth-form-input" placeholder="Nhập tên đăng nhập" name ="txtUsername">
                    <div class="has-error">
                        
                        
                    </div>
                    </div>
                    <div class="auth-form-group">
                        
                        <i class="fa-solid fa-lock"></i>
                            
                        <input type="password" class="auth-form-input" placeholder="Nhập mật khẩu" name ="txtPassword">
                        
                    </div>
                    <input type='submit' name="dangnhap" class="btn-primary" value='Đăng nhập' />
                    
 
                </form>
            </div>
            <span class="login-facebook-wrapper-sub-text text-middle-line">
                <label>hoặc</label>
                        </span>
            </div>
            <p class="other-login-methods">
                Đăng nhập bằng <a href="login_fb.php">
                    <i class="fa-brands fa-facebook"></i>
                </a>
           </p>
    </div>
        

       
            </div>
        </div>
    </div>
    </div>
     </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  </body>
</html>
