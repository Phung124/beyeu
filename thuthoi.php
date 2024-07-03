<?php

// Đường dẫn tới file cần gửi
$file_path = "congdong/uploads/anh3.png";

// Đọc dữ liệu từ file
$image_data = file_get_contents($file_path);

// Kiểm tra xem dữ liệu có được đọc thành công không
if ($image_data !== false) {
    // Mã hóa dữ liệu hình ảnh thành base64
    $base64_image = base64_encode($image_data);

    // Gửi yêu cầu đến API của Teachable Machine (ví dụ sử dụng cURL)
    $url = 'https://teachablemachine.withgoogle.com/models/j5bmF10vH';
    $data = array(
        'image' => $base64_image,
    );
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Xử lý và trả về kết quả
    if ($response) {
        $result = json_decode($response, true);
        if ($result && isset($result['classifications'])) {
            // Lọc kết quả dựa trên điều kiện
            $classifications = $result['classifications'];

            // Xử lý và in ra kết quả dựa trên điều kiện
            foreach ($classifications as $classification) {
                echo $classification['label'] . ": " . $classification['score'] . "<br>";
            }
        } else {
            echo "Không thể xử lý kết quả từ Teachable Machine.";
        }
    } else {
        echo "Không nhận được phản hồi từ Teachable Machine.";
    }
} else {
    echo "Không thể đọc dữ liệu từ file.";
}

?>