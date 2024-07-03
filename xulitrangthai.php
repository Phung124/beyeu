<?php
include('admincb/config/config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql_update = "UPDATE lichtiem SET status = '$status' WHERE idlichtiem = $id";
    if (mysqli_query($mysqli, $sql_update)) {
        header("Location: lichtiem.php");
        exit();
    } else {
        echo "Cập nhật trạng thái thất bại: " . mysqli_error($mysqli);
    }
}
?>
