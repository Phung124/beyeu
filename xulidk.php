<?php
  session_start(); 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername']))
    {
        die('');
    }
     
    //Nhúng file kết nối với database
    include('admincb/config/config.php');
   
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    $fullname   = addslashes($_POST['txtFullname']);
    $birthday   = addslashes($_POST['txtBirthday']);
    $sex        = addslashes($_POST['txtSex']);
       
  
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex)
    {
        ?>

<div class="container">
     <div class="row">
        <div class="col-md-12 login-sec" > 
            <div class="alert alert-success" role="alert">
            Vui lòng nhập đầy đủ thông tin với trang <a href="register.php" class="alert-link">đăng ký</a>. Mời bạn trở về!
        </div>
            </div>
          </div>
     </div>
</div>            
    <?php

        exit;
    }
      
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM member WHERE username = '$username' or email = '$email' ")) > 0)
    {
        

?>
      <div class="container">
     <div class="row">
        <div class="col-md-12 login-sec" > 
            <div class="alert alert-success" role="alert">
           Tên email hoặc username đã tồn tại . Mời bạn đăng ký lại với một tên khác! <a href="register.php" class="alert-link">đăng ký</a>
        </div>
            </div>
          </div>
     </div>
</div>
       <?php  
        
        // Dừng chương trình
        die ();
    }
    else { 
    //Lưu thông tin thành viên vào bảng
    @$addmember =" INSERT INTO member (
            username,
            password,
            email,
            fullname,
            birthday,
            sex,
            Anh
        )
        VALUE (
            '$username',
            '$password',
            '$email',
            '$fullname',
            '$birthday',
            '$sex' ,null)";
                          
    //Thông báo quá trình lưu
    if ($mysqli->query($addmember) == TRUE)
    {
    ?>
    <div class="container">
     <div class="row">
        <div class="col-md-12 login-sec" > 
            <div class="alert alert-success" role="alert">
           Chúc mừng bạn đăng ký thành công! Mời bạn đăng nhập<a href="login.php" class="alert-link">đăng nhập</a>
            </div>
        </div>
    </div>
     </div>
<?php
    }
    else
    {
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
    }
}
?>

