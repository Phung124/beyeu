
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include("admincb/config/config.php"); 

?>
<div class="container justify-content-between">
          <nav>
            <ul id="main-menu" class="d-flex row">
              <li><a href="trangchu.php">Trang chủ</a></li>
              <li><a href="congdong.php">Diễn đàn</a></li>
              <li><a href="theodoi.php?quanly=theodoi&id=2">Theo dõi</a></li>

              <li><a href="thucpham.php?quanly=thucpham&id=23 ">Thực phẩm</a></li>

              <li><a href="tiemchung.php?quanly=tiemchung">Tiêm chủng</a></li>
             
            </ul>
          </nav>
        
<ul id="main-menu" class="d-flex row">
<?php if(isset($_SESSION['username'])){ ?>
  <li>    <a href="mess.php"><i class="fab fa-facebook-messenger"></i></a></li>
         <li><a href="trangcanhan.php"><i class="fa-solid fa-user"></i><?php echo $_SESSION['username'] ?></a> </li>
         <li><a href="dangxuat.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>

          </ul>
          <?php
           }
           else { ?>
            <ul id="main-menu" class="d-flex row">
         
            <li><a href="login.php">Đăng nhập</a></li>
            <li><a href="register.php">Đăng kí</a></li>
            </ul>
           <?php } ?>
        
        </div>