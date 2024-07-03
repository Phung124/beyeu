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
              <li class=""><a href="congdong.html">Cong Dong</a></li>
              <li><a href="theodoi.html">Theo doi</a></li>
              <li><a href="">Thuc Pham</a></li>
              <li><a href="">Tiem chuan</a></li>
              <li><a href="">Video</a></li>
            </ul>
          </nav>
          <ul id="main-menu" class="d-flex row">
            <li><a href="">Đăng nhập</a></li>
            <li><a href="">Đăng kí</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="wpcontent" >
        <div class="main-content"style="height:600px">
     <div class="main-contenttt login-register "style="background-color: #fafafa">
        <div class="login-register-container" style>
            <div class="login-by-facebook-container">
                <div class="img-preview-wrapper">
                    <img style="width: 50%;" src="https://beyeu.com/public/img/beyeu-logo.svg" alt="Image Preview">
                </div>
        </div>
        <div class="login-facebook-wrapper">
            <span class="login-facebook-wrapper-title">Đăng kí</span>
            <div class="auth-form-container">
                <form action="xulidk.php" method="POST">       
               <div class="auth-form-group">
                
                <i class="fa-solid fa-user"></i>
                
                        <input type="email" class="auth-form-input" placeholder="Nhập email" name ="txtEmail">
                    <div class="has-error">
                        <span> </span>
                        
                    </div>
                    </div>
                    <div class="auth-form-group">
                
                      <i class="fa-solid fa-user"></i>
                      
                              <input type="text" class="auth-form-input" placeholder="Nhập tên" name ="txtFullname">
                          <div class="has-error">
                              <span> </span>
                              
                          </div>
                          </div>
                          <div class="auth-form-group">
                
                <i class="fa-solid fa-user"></i>
                
                        <input type="text" class="auth-form-input" placeholder="Nhập user" name ="txtUsername">
                    <div class="has-error">
                        <span> </span>
                        
                    </div>
                    </div>
                    <div class="auth-form-group">
                        
                        <i class="fa-solid fa-lock"></i>
                            
                        <input type="password" class="auth-form-input" placeholder="Nhập mật khẩu" name ="txtPassword">
                        
                    </div>
  
                    <div class="auth-form-group">
                      
                      <div class="col-sm-9">
                      <input type="text" class="auth-form-input" name="txtBirthday"  placeholder="Birthday">
                      </div>
                  </div>
      
                  <div class="auth-form-group row">
                  
                      <div class="col-sm-9">
                    
                              <select name="txtSex" style=" width: 114px;">
                                  <option value=""></option>
                                  <option value="Nam">Nam</option>
                                  <option value="Nu">Nữ</option>
                              </select>
                      </div>
                  </div>
                    <button type="submit" name ="dangki" class="btn-primary">Đăng kí</button>
 
                </form>
            </div>
            <span class="login-facebook-wrapper-sub-text text-middle-line">
                <label>hoặc</label>
                        </span>
            </div>
            <p class="other-login-methods">
                Đăng nhập bằng <a href="">
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
