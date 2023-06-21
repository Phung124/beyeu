<?php

include('admincb/config/config.php');
session_start(); 
$user=$_SESSION['username'];

$NoiDung = addslashes($_POST['Txtnoidung']);
$CheDo = addslashes($_POST['CheDo']);
$chude = addslashes($_POST['chude']);

$target_di   = "congdong/uploadss/";



if(isset($_POST["dangbaiviet"])) 
{
    $target   = $target_di . basename($_FILES["upload"]["name"]);
            if($_FILES["upload"]["tmp_name"]==NULL) // kh co anh
            {
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
        else // khac null, co anh
        {
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
   
}