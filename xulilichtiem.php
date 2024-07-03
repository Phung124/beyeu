<?php 
include('admincb/config/config.php');
session_start(); 
$user=$_SESSION['username'];
$vaccineName = addslashes($_POST['vaccineName']);
$vaccineDate = addslashes($_POST['vaccineDate']);
$vaccineTime = addslashes($_POST['vaccineTime']);
$vaccineMonth = addslashes($_POST['vaccineMonth']);
$vaccineNotes = addslashes($_POST['vaccineNotes']);
$vaccineso = addslashes($_POST['vaccineso']);
if(isset($_POST["themlichtreem"])){
    $query = "INSERT INTO lichtiem (username,tenloai,ngaytiem,giotiem,thangtiem,ghichu,somui,child_info_submitted,status)
    VALUE ('$user','$vaccineName','$vaccineDate','$vaccineTime','$vaccineMonth','$vaccineNotes','$vaccineso','1','chưa tiêm')";
            if ($mysqli->query($query) == TRUE)
        {
            header("Refresh:0; url=lichtiem.php");
            exit; 
        }
        else
        {
            echo "that bại". $mysqli->error;
        }
}

?>
