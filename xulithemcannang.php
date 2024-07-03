<?php 
include('admincb/config/config.php');
session_start(); 
$user=$_SESSION['username'];
$weight = addslashes($_POST['weight']);
$date = addslashes($_POST['date']);

if(isset($_POST["themcannang"])){
    $sql_check = "SELECT * FROM cannang WHERE ngay = '$date'";
$result_check = mysqli_query($mysqli,$sql_check);
if($result_check->num_rows > 0){
    $sql_update = "UPDATE cannang SET cannang1 = $weight 
                   WHERE ngay = '$date'";
if ($mysqli->query($sql_update) == TRUE)
{
    header("Refresh:0; url=themcannang.php");
    exit; 
}
else
{
    echo "that bại". $mysqli->error;
}
}else{
    $query = "INSERT INTO cannang (username,cannang1,ngay)
    VALUE ('$user','$weight','$date')";
            if ($mysqli->query($query) == TRUE)
        {
            header("Refresh:0; url=themcannang.php");
            exit; 
        }
        else
        {
            echo "that bại". $mysqli->error;
        }
}}

?>
