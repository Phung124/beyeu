<?php
include('admincb/config/config.php');
session_start();
$user = $_SESSION['username'];


if(isset($_POST["dangbaiviet"])) 
{
   
$childName =addslashes($_POST['childName']);
$childBirthDate =addslashes($_POST['childBirthDate']);
$childGender =addslashes($_POST['childGender']);
$sql = "SELECT child_info_submitted,mother_info_submitted FROM member WHERE username='$user'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
if ($row['child_info_submitted'] || $row['mother_info_submitted'])
{ 
 echo"bạn chỉ được nhập 1 thông tin thôi ";
}else{
if ($row['child_info_submitted']) {
    echo "Bạn đã nhập thông tin trẻ em rồi.";
}else{
$query = "INSERT INTO be (username,tenbe,ngaysinhbe,gioitinhbe)
                VALUE ('$user','$childName','$childBirthDate','$childGender' )";
                        if ($mysqli->query($query) == TRUE)
                    {
                            $sql = "UPDATE member SET child_info_submitted = TRUE WHERE username='$user'";
                            $mysqli->query($sql);
                        header("Refresh:0; url=congdong.php");
                        exit; // dừng các mã chạy phía dưới;
                    }
                    else
                    {
                        echo "that bại". $mysqli->error;
                    }
                }
            }
}
if(isset($_POST["dangbaiviet1"])) 
{
  
$motherName =addslashes($_POST['motherName']);
$dueDate =addslashes($_POST['dueDate']);
$sql = "SELECT mother_info_submitted,child_info_submitted FROM member WHERE username='$user'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
if ($row['child_info_submitted'] || $row['mother_info_submitted'])
{ 
 echo"bạn chỉ được nhập 1 thông tin thôi ";
}else{
if ($row['mother_info_submitted']) {
    echo "Bạn đã nhập thông tin mẹ rồi.";
}else{
$query = "INSERT INTO me (username,tenme,ngaydusinh)
                VALUE ('$user','$motherName','$dueDate' )";
                        if ($mysqli->query($query) == TRUE)
                    {
                        $sql = "UPDATE member SET mother_info_submitted = TRUE WHERE username='$user'";
                        $mysqli->query($sql);
                        header("Refresh:0; url=congdong.php");
                        exit; // dừng các mã chạy phía dưới;
                    }
                    else
                    {
                        echo "that bại". $mysqli->error;
                    }

}
}

}
?>