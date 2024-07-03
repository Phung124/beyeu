<?php
include('admincb/config/config.php');
$id = $_POST['id'];
$username =$_POST['txtusername'];
$fullname =$_POST['txtFullname'];
$birthday =$_POST['txtBirthday'];
$email=$_POST['txtEmail'];
if(isset($_POST['sua'])){
    
        $sql_sua = "UPDATE member SET email='".$email."',username='".$username."',fullname='".$fullname."',birthday='".$birthday."' WHERE id='$_GET[id]' " ;
    mysqli_query($mysqli,$sql_sua);
    header("Location:trangcanhan.php");
}
