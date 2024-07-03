<?php
session_start(); // Khởi động session đầu tiên trước khi sử dụng
// Kiểm tra phương thức request là POST hay không
    // Kiểm tra xem các dữ liệu cần thiết từ form đã được gửi đi hay chưa
    if (isset($_POST['Noidung']) && isset($_POST['chude'])) {
        // Bao gồm file cấu hình để kết nối CSDL
        include('admincb/config/config.php');

        // Sử dụng session lưu trữ biến $user
        $user = $_SESSION['username'];

        // Escape các dữ liệu nhận từ form để tránh SQL injection
        $NoiDung = mysqli_real_escape_string($mysqli, $_POST['Noidung']);
        $chude = mysqli_real_escape_string($mysqli, $_POST['chude']);

        // Kiểm tra xem file ảnh có được tải lên không
        if ($_FILES["upload"]["tmp_name"] !== '') {
            $target_di = "congdong/uploads/";
            $target = $target_di . basename($_FILES["upload"]["name"]);

            // Di chuyển file ảnh vào thư mục đích
            if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target)) {
                echo "Đã upload thành công";

                // Tạo câu truy vấn SQL để chèn dữ liệu vào CSDL
                $query = "INSERT INTO post (username, noidung, thoigian, anh, chude) 
                          VALUES ('$user', '$NoiDung', NOW(), '$target', '$chude')";

                // Thực thi câu truy vấn và kiểm tra kết quả
                if ($mysqli->query($query) === TRUE) {
                    // Nếu thành công, chuyển hướng về trang chủ của cộng đồng
                    header("Location: congdong.php");
                    exit; // Ngừng thực thi các lệnh tiếp theo sau khi chuyển hướng
                } else {
                    echo "Lỗi: " . $mysqli->error;
                }
            } else {
                echo "Có lỗi xảy ra khi upload file.";
            }
        } else {
            echo "Bạn phải đăng hình ảnh.";
        }
    } else {
        header("Location: congdong.php");
        exit;
    }
?>
