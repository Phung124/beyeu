<?php
// Đường dẫn lưu trữ ảnh trên server
$upload_path = 'congdong/uploads/';

// Tạo thư mục nếu nó không tồn tại
if (!file_exists($upload_path)) {
    mkdir($upload_path, 0777, true);
}

// Kiểm tra xem có tệp ảnh được gửi lên không
if (isset($_FILES["upload"])) {
    // Lưu tệp ảnh vào thư mục uploads
    $target_file = $upload_path . basename($_FILES["upload"]["name"]);
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        // Gửi ảnh đến Teachable Machine
        $image_data = file_get_contents($target_file);
        $url = "https://teachablemachine.withgoogle.com/models/j5bmF10vH/";
        $data = array(
            'image' => base64_encode($image_data)
        );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Trả lại kết quả phân loại từ Teachable Machine
        echo $response;
    } else {
        echo "Không thể tải lên tệp.";
    }
} else {
    echo "Không tìm thấy tệp ảnh.";
}
?>
