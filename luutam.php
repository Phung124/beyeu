<!-- <?php

include('admincb/config/config.php');
session_start(); 
$user=$_SESSION['username'];

$NoiDung = addslashes($_POST['Txtnoidung']);
$CheDo = addslashes($_POST['CheDo']);
$chude = addslashes($_POST['chude']);

$target_di   = "congdong/uploadss/";

$target_file   = $target_di . basename($_FILES["upload"]["name"]);
$allowUpload   = true;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$maxfilesize   = 800000; //(bytes)

$allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


if(isset($_POST["dangbaiviet"])) 
{
    //Kiểm tra xem có phải là ảnh
 if($_FILES["upload"]["tmp_name"]==NULL){
    $query = "INSERT INTO post (username,noidung,thoigian,anh,chedo,chude)
    VALUE ('$user','$NoiDung',now(), NULL,'$CheDo','$chude' )";
            if ($mysqli->query($query) == TRUE)
        {
            header("Refresh:0; url=congdong.php");
            exit; // dừng các mã chạy phía dưới;
        }
        else
        {
            echo "that bại". $mysqli->error;
        }
 }
 else{
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) 
    {
        $allowUpload = true;
    } 
    else 
    {
        echo "Không phải file ảnh.";
        $allowUpload = false;
    }
 }

}

// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
if ($_FILES["upload"]["size"] > $maxfilesize)
{
    echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
    $allowUpload = false;
}


// Kiểm tra kiểu file

// Check if $uploadOk is set to 0 by an error
if ($allowUpload) { 
    // Đường dẫn tạm thời để lưu trữ hình ảnh
    $temp_file = $_FILES['upload']['tmp_name'];

    // Đọc dữ liệu từ tệp tạm
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
}

//////////////////
?> -->