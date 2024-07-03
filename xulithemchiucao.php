<?php 
include('admincb/config/config.php');
session_start(); 
$user=$_SESSION['username'];
$height = addslashes($_POST['height']);
$date = addslashes($_POST['date']);

if(isset($_POST["themchiucao"])){
    $sql_check = "SELECT * FROM cannang WHERE ngay = '$date'";
$result_check = mysqli_query($mysqli,$sql_check);
if($result_check->num_rows > 0){
    $sql_update = "UPDATE cannang SET chiucao1 = $height 
                   WHERE ngay = '$date'";
if ($mysqli->query($sql_update) == TRUE)
{
    header("Refresh:0; url=themchieucao.php");
    exit; 
}
else
{
    echo "that bại". $mysqli->error;
}
}else{
    $query = "INSERT INTO cannang (username,chiucao1,ngay)
    VALUE ('$user','$height','$date')";
            if ($mysqli->query($query) == TRUE)
        {
            header("Refresh:0; url=themchieucao.php");
            exit; 
        }
        else
        {
            echo "that bại". $mysqli->error;
        }
}}

?>
