<!-- <?php

// Kiểm tra xem biểu mẫu đã được gửi đi chưa
if (isset($_POST["submit"])) {
    // Đường dẫn tạm thời để lưu trữ hình ảnh
    $temp_file = $_FILES['fileupload']['tmp_name'];

    // Đọc dữ liệu từ tệp tạm
    $image_data = file_get_contents($temp_file);

    // Kiểm tra xem dữ liệu hình ảnh có được đọc thành công không
    if ($image_data !== false) {
        // Mã hóa dữ liệu hình ảnh thành base64
        $base64_image = base64_encode($image_data);

        // Gửi yêu cầu đến API của Teachable Machine (ví dụ sử dụng cURL)
        $url = 'https://teachablemachine.withgoogle.com/models/{model_id}/classify';
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
                    if ($classification['label'] === 'trẻ em') {
                        // Xử lý khi nhãn là Label1
                        echo "Label1: " ;
                    } elseif ($classification['label'] === 'k phải trẻ em') {
                        // Xử lý khi nhãn là Label2
                        echo "Label2: " . $classification['score'] . "<br>";
                    } else {
                        // Xử lý khi nhãn không trùng khớp với bất kỳ điều kiện nào
                        echo "Không xác định: " . $classification['score'] . "<br>";
                    }
                }
            } else {
                echo "Không thể xử lý kết quả từ Teachable Machine.";
            }
        } else {
            echo "Không nhận được phản hồi từ Teachable Machine.";
        }
    }}
    




    $NoiDung = addslashes($_POST['Txtnoidung']);
    $CheDo = addslashes($_POST['CheDo']);
    $chude = addslashes($_POST['chude']);
    
    $target_di   = "congdong/uploadss/";
    $target   = $target_di . basename($_FILES["upload"]["name"]);
    if(move_uploaded_file($_FILES["upload"]["tmp_name"], $target))
    {
    echo " Đã upload thành công";
    $flag=true;
    if (isset($flag) && $flag == true) 
    {
    header("Location:congdong.php");
    }
    $query = "INSERT INTO post (username,noidung,thoigian,anh,chedo,chude)
    VALUE ('$user','$NoiDung',now(), '$target','$CheDo','$chude' )";
    if ($mysqli->query($query) == TRUE)
        {
            header("Refresh:0; url=congdong.php");
            exit; // dừng các mã chạy phía dưới;
        }
    else
        {
            echo "that bia". $mysqli->error;
        }
} 
else
{
    echo "Có lỗi xảy ra khi upload file.";
}   
?> -->