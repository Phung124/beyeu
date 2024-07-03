<?php 
include('admincb/config/config.php');
// $user=$_SESSION['username'];
$thang = isset($_GET['thang']) ? mysqli_real_escape_string($mysqli, $_GET['thang']) : null;
$gender = isset($_GET['gender']) ? mysqli_real_escape_string($mysqli, $_GET['gender']) : null;
if ($gender !== null && $thang !== null) {
    if($thang=='13' || $thang=='14' || $thang=='15' ){
        $sql_chiucao = "SELECT * FROM thongso
        WHERE thongso.tuthang='12-15' and thongso.gioitinhbe = '$_GET[gender]'  LIMIT 1 ";
       $query_chiucao = mysqli_query($mysqli, $sql_chiucao);
    }
   else if( $thang=='16' || $thang=='17' || $thang=='18'){
    $sql_chiucao = "SELECT * FROM thongso
    WHERE thongso.tuthang='15-18' and thongso.gioitinhbe = '$_GET[gender]'  LIMIT 1 ";
   $query_chiucao = mysqli_query($mysqli, $sql_chiucao);
   }
   else if( $thang=='19' || $thang=='20' || $thang=='21'){
    $sql_chiucao = "SELECT * FROM thongso
    WHERE thongso.tuthang='18-21' and thongso.gioitinhbe = '$_GET[gender]'  LIMIT 1 ";
   $query_chiucao = mysqli_query($mysqli, $sql_chiucao);
   }
   else if( $thang=='22' || $thang=='23' || $thang=='24'){
    $sql_chiucao = "SELECT * FROM thongso
    WHERE thongso.tuthang='18-21' and thongso.gioitinhbe = '$_GET[gender]'  LIMIT 1 ";
   $query_chiucao = mysqli_query($mysqli, $sql_chiucao);
   }
   else{
    $sql_chiucao = "SELECT * FROM thongso 
    WHERE thongso.thang='$_GET[thang]' and thongso.gioitinhbe = '$_GET[gender]'  LIMIT 1 ";
   $query_chiucao = mysqli_query($mysqli, $sql_chiucao);
   }
}
$sql_chiucao1 = "SELECT * FROM thongso 
where thongso.gioitinhbe = '$_GET[gender]'   ";
$query_chiucao1 = mysqli_query($mysqli, $sql_chiucao1);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Chỉ Số Của Bé</title>
    <link rel="stylesheet" href="chiso.css">
</head>
<body>
    <div class="container">
        <div class="header">
        <?php

while ($row = mysqli_fetch_array($query_chiucao)) {


?>
            <button onclick="goBack()" class="back-button">&larr;</button>
            <h1> <?php echo $row['tuthang'] ?> THÁNG</h1>

        </div>
        <div class="scroll-container1">
        <button class=" scroll-button" id="scrollLeft">&lt;</button>
        <div   class="months nav" id="monthsContainer">
        <?php

while ($row1 = mysqli_fetch_array($query_chiucao1)) {


?>
<a class="month nav-button" style="text-decoration: none;" href="chiiucao.php?thang=<?php echo $row1['thang'] ?>&gender=<?php echo $row1['gioitinhbe'] ?>">
    <button  class="month nav-button"><?php echo $row1['thang'] ?> tháng</button></a>
            
        
            <?php 
            }
            ?>
             
        </div>
        <button class="scroll-button " id="scrollRight">&gt;</button>
        </div>
        <div class="gender-buttons">
        <a id="linkBeTrai" href="chiiucao.php?thang=<?php echo $row['thang'] ?>&gender=Nam">  <button id="beTrai" class="gender-button active"> Bé Trai</button> </a>
        <a id="linkBeGai" href="chiiucao.php?thang=<?php echo $row['thang'] ?>&gender=Nữ">  <button id="beGai" class="gender-button  "> Bé Gái</button> </a>
        </div>
   
        <div class="table-container">
            <h2>Bảng Cân Nặng Bé Trai <?php echo $row['tuthang'] ?> tháng</h2>
            <table>
                <tr>
                    <th>Suy Dinh Dưỡng</th>
                    <th>Trung Bình</th>
                    <th>Béo Phì</th>
                </tr>
                <tr>
                    <td><?php echo $row['suydd'] ?> kg</td>
                    <td><?php echo $row['trungbinh'] ?> kg</td>
                    <td><?php echo $row['beophi'] ?> kg</td>
                </tr>
            </table>
        </div>
        <div class="table-container">
            <h2>Bảng Chiều Cao Bé Trai 12 &rarr; 15 tháng</h2>
            <table>
                <tr>
                    <th>Thấp Còi</th>
                    <th>Trung Bình</th>
                    <th>Rất Cao</th>
                </tr>
                <tr>
                    <td><?php echo $row['thapcoi'] ?> cm</td>
                    <td><?php echo $row['trungbinhh'] ?> cm</td>
                    <td><?php echo $row['ratcao'] ?> cm</td>
                </tr>
            </table>
        </div>
        <?php
    }
    ?>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const beTraiButton = document.getElementById('beTrai');
    const beGaiButton = document.getElementById('beGai');

    // Load the button state from localStorage
    const selectedGender = localStorage.getItem('selectedGender');

    if (selectedGender === 'Nam') {
        beTraiButton.classList.add('active');
        beGaiButton.classList.remove('active');
    } else if (selectedGender === 'Nữ') {
        beGaiButton.classList.add('active');
        beTraiButton.classList.remove('active');
    }

    beTraiButton.addEventListener('click', () => {
        localStorage.setItem('selectedGender', 'Nam');
        beTraiButton.classList.add('active');
        beGaiButton.classList.remove('active');
    });

    beGaiButton.addEventListener('click', () => {
        localStorage.setItem('selectedGender', 'Nữ');
        beGaiButton.classList.add('active');
        beTraiButton.classList.remove('active');
    });

    
    const monthsContainer = document.getElementById('monthsContainer');
    const months = document.querySelectorAll('.month');
    const scrollLeftButton = document.getElementById('scrollLeft');
    const scrollRightButton = document.getElementById('scrollRight');
    let currentIndex = 0;

    function updateVisibleMonths() {
        months.forEach((month, index) => {
            if (index >= currentIndex && index < currentIndex + 10) {
                month.style.display = 'block';
            } else {
                month.style.display = 'none';
            }
        });
        scrollLeftButton.disabled = currentIndex === 0;
        scrollRightButton.disabled = currentIndex + 10 >= months.length;
    }

    scrollLeftButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex -= 1;
            updateVisibleMonths();
        }
    });

    scrollRightButton.addEventListener('click', () => {
        if (currentIndex + 10 < months.length) {
            currentIndex += 1;
            updateVisibleMonths();
        }
    });

    // Initialize the visible months
    updateVisibleMonths();
});
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
