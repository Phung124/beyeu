<div class="center-panel">
<?php 
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 

?>  

<form id="upload-form" enctype="multipart/form-data" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <div class="container">
     <div class="row">
    <div class="col-md-12 login-sec" style=" padding-left: 0px;    max-width: 98%;" > 


<div class="card shadow mb-5 bg-white rounded">
    <div class="card-header">
        <strong>Tạo bài viết</strong>
    </div>

    <div class="card-body">
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <textarea style=" width: 435px;    height: 157px;"name="Noidung"  rows="5" placeholder="Bạn đang nghĩ gì ?...." class="form-control"></textarea>
        </div>

    
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4" style="width:214px">
                        <input type="file" accept="image/*" name="upload" id="image-input">  
                </div>
                
              
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <select name="chude"  class="form-control-sm form-control">
                        <option value="1">Baby</option>
                        
                        
                    </select>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <button type="submit" name="dangbaiviet" onclick="handleFormSubmit(event)" class="btn btn-primary btn-lg btn-block">Đăng Bài</button>
                </div>
            </div>
    </div>
</div>
</div>
</div>
</div>
</form>
<div id="label-container"></div>
<!-- Thư viện TensorFlow.js và Teachable Machine -->
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <script type="text/javascript">
        // Khai báo URL của Teachable Machine model
        const URL = "https://teachablemachine.withgoogle.com/models/j5bmF10vH/";
        let model, maxPredictions;

        // Hàm khởi tạo model khi trang được tải
        async function init() {
            const modelURL = URL + "model.json";
            const metadataURL = URL + "metadata.json";
            // Load model từ Teachable Machine
            model = await tmImage.load(modelURL, metadataURL);
            // Lấy số lớp dự đoán tối đa
            maxPredictions = model.getTotalClasses();
            console.log("Model loaded successfully.");
        }

        // Hàm xử lý sự kiện khi người dùng submit form
        async function handleFormSubmit(event) {
            event.preventDefault(); // Ngăn chặn sự kiện mặc định của nút submit

            const image = document.getElementById("image-input").files[0]; // Lấy file hình ảnh từ input
            const reader = new FileReader();
            reader.onload = async function(event) {
                // Tạo element img để hiển thị ảnh trên trang
                const imgElement = document.createElement("img");
                imgElement.src = event.target.result;
                imgElement.onload = async function() {
                    // Dự đoán lớp của ảnh bằng model đã tải
                    const prediction = await model.predict(imgElement);
                    // Hiển thị kết quả dự đoán trên trang
                    const labelContainer = document.getElementById("label-container");
                    labelContainer.innerHTML = ""; // Xóa nội dung cũ

                    // Tìm dự đoán có xác suất cao nhất
                    let maxProbabilityPrediction = null;
                    if (prediction.length > 0) {
                        maxProbabilityPrediction = prediction[0];
                        for (let i = 1; i < prediction.length; i++) {
                            if (prediction[i].probability > maxProbabilityPrediction.probability) {
                                maxProbabilityPrediction = prediction[i];
                            }
                        }
                    }

                    if (maxProbabilityPrediction) {
                        const div = document.createElement("div");
                        const classPrediction = maxProbabilityPrediction.className + ": " + maxProbabilityPrediction.probability.toFixed(2);
                        
                        div.textContent = classPrediction;
                     
                    

                        // Chuyển hướng đến trang thu.php nếu className là "tre em"
                        if (maxProbabilityPrediction.className.trim() === "tre em") {
                        const formData = new FormData(document.getElementById("upload-form"));
                        const xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function() {
                          if (xhr.readyState === 4) {
            if (xhr.status === 200) {
     
                window.location.href = "XuLyDangBaiViet.php";
            } else {
                console.error('Đã xảy ra lỗi khi yêu cầu dữ liệu.');
                alert("Đã xảy ra lỗi khi đăng bài viết. Vui lòng thử lại sau.");
                window.location.reload();
            }
        }
                        };
                        xhr.open("POST", "XuLyDangBaiViet.php", true);
                        xhr.send(formData);
                        
                    } else {
                      
                            alert("Bạn phải đăng hình bé yêu"); // Hiển thị thông báo
                            window.location.reload();
                       
                    }
                    } else {
                        // Nếu không có dự đoán nào có xác suất cao, hiển thị thông báo tương ứng
                        labelContainer.innerHTML = "Không có dự đoán nào.";
                    }
                };
            };
            // Đọc ảnh thành URL data để hiển thị
            reader.readAsDataURL(image);
        }

        // Khởi tạo model khi trang được tải
        init();
    </script>
            <div class="compose-wrap">
              <div class="what">
                <div class="btn btn-ground">
                  <svg
                    class="icon queston-icon"
                    width="25"
                    height="25"
                    viewBox="0 0 8 12"
                  >
                    <g
                      stroke="none"
                      stroke-width="1"
                      fill="none"
                      fill-rule="evenodd"
                    >
                      <g
                        transform="translate(-26.000000, -128.000000)"
                        fill="#FFFFFF"
                      >
                        <g transform="translate(26.873687, 128.019530)">
                          <path
                            d="M3.12531253,8.789064 C3.66470647,8.789064 4.1019702,9.22629 4.1019702,9.765626 C4.1019702,10.304962 3.66470647,10.742189 3.12531253,10.742189 C2.58592259,10.742189 2.14865287,10.304962 2.14865287,9.765626 C2.14865287,9.22629 2.58592259,8.789064 3.12531253,8.789064 Z"
                          ></path>
                          <path
                            d="M3.12531253,-5.86197757e-14 C4.84861486,-5.86197757e-14 6.25062506,1.40188 6.25062506,3.125 C6.25062506,4.57848 5.25310531,5.803361 3.90664066,6.151134 L3.90664066,7.421876 C3.90664066,7.853361 3.55683568,8.203126 3.12531253,8.203126 C2.69378538,8.203126 2.3439844,7.853361 2.3439844,7.421876 L2.3439844,5.468751 C2.3439844,5.037267 2.69378538,4.6875 3.12531253,4.6875 C3.9869587,4.6875 4.6879688,3.98656 4.6879688,3.125 C4.6879688,2.26344 3.9869587,1.5625 3.12531253,1.5625 C2.26366437,1.5625 1.56265627,2.26344 1.56265627,3.125 C1.56265627,3.55649 1.21285529,3.90625 0.781328133,3.90625 C0.34980098,3.90625 1.82076576e-14,3.55649 1.82076576e-14,3.125 C1.82076576e-14,1.40188 1.4020152,-5.86197757e-14 3.12531253,-5.86197757e-14 Z"
                            id="Path"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <span> Câu hỏi của bạn là gì? </span>
              </div>
            </div>
            <div>
              <div class="normal-cart">
                <div class="d-flex">
                  <div class="left">
                    <span class="congdong"> Cộng đồng </span>
                  </div>
                  <div class="right">
                    <div class="dropdown">
                      <button class="drop-btn select-filter">
                        <a href="">Bình Chọn</a>
                      </button>
                      <button id="btnn" class="drop-btn">
                        Liên quan
                        <i class="fa-sharp fa-solid fa-chevron-down"></i>
                        <div class="dropdow-content">
                          <div>Lọc bởi</div>
                          <a href="">Liên Quan</a>
                          <a href="">Mới Nhất</a>
                          <a href="">Xu Hướng</a>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="feed">
          

              <!-- <div class="question-elem-containers in-feed-design">
                <div class="main-elem-section">
                  <div class="cart-template">
                    <div class="cart-template-top">
                      <aside class="left">
                        <div class="topic-link">
                          <div style="background: rgb(110, 183, 199)"></div>
                          <a href=""> Baby</a>
                        </div>
                      </aside>
                      <aside class="right">
                        <div class="last-seen reply-cart-seen">
                          <a href="">5d trước</a>
                        </div>
                        <div class="action-link">
                          <span class="pointer-click">
                            <a href=""> <i class="fa-solid fa-share"></i> </a>
                          </span>
                        </div>
                      </aside>
                    </div>
                    <section class="post-section">
                      <div class="post-section-body">
                        <div class="child-cart-components">
                          <div class="question-elements question-cart">
                            <p class="page-title pointer-click">
                              Mong Bé yêu giải đáp thắc mắc
                              <br />

                              Em nghĩ có sự nhầm lẫn gì ở đây và rất mong BTC Bé
                              yêu kiểm tra lại thông tin, sớm phản hồi lại ạ.
                              Tại sao trang cá nhân k hoặc rất ít câu trả lời/
                              bình luận/comment mà tại sao lại được lọt top các
                              mẹ hoạt động tích cực nhất? Tại sao? Tại sao?
                            </p>
                            <div class="text-desc">
                              <a href="" class="question-cart-link">
                                thắc mắc</a
                              >
                            </div>
                            <div class="img-slide-wrap">
                              <div class="img-blur-wrap">
                                <div
                                  style="
                                    background-image: url(https://s3.beyeu.com/cdn-cgi/image/width=450,height=500,fit=crop,quality=90/parenttown-prod/thumb_16835530625496.jpg);
                                  "
                                ></div>
                                <img
                                  src="https://s3.beyeu.com/cdn-cgi/image/width=450,height=500,fit=crop,quality=90/parenttown-prod/thumb_16835530625496.jpg"
                                  alt=""
                                />
                                <span class="more-images-wrap">
                                  <i class="fa-regular fa-image"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="response-bar">
                          <aside class="left">
                            <p class="pointer-click">
                              <span
                                class="response-sprite beyeu heart-gray-icon"
                              >
                              </span>
                              <span class="count"> 3 </span>
                              <span>Thích</span>
                            </p>
                            <a href="" class="pointer">
                              <span class="response-sprite beyeu comment-icon">
                              </span>
                              <span class="count"> 8 </span>
                              <span>Trả Lời</span>
                            </a>
                          </aside>
                          <aside class="right"></aside>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="reply-list-wrap"></div>
                <div class="post-reply">
                  <div>
                    <img
                      class="profile-thumb small"
                      src="https://s3.theasianparent.com/cdn-cgi/image/width=150,height=150,fit=crop,quality=90/parenttown-prod/profile_16806617501139.jpg"
                      alt=""
                    />
                  </div>
                  <div class="reply-input-text">
                    <span>Viết phản hồi</span>
                  </div>
                </div>
              </div> -->
             
            <?php
            include('XuatBaiViet.php');
            ?>


            </div>
          </div>