<?php
include('admincb/config/config.php');
session_start();
$user = $_SESSION['username'];
$sql_cangnang = "SELECT * FROM cannang,be
where be.username=cannang.username and cannang.username = '$user' order by  ngay desc limit 1";
$query_cangnang = mysqli_query($mysqli, $sql_cangnang);
if ($query_cangnang->num_rows > 0) 
{ $row = $query_cangnang->fetch_assoc(); 
$gender = $row['gioitinhbe'];
 $birthDate = $row['ngaysinhbe']; 
 $tenbe = $row['tenbe'];
 $weight1 = $row['cannang1'];
 $height1 = $row['chiucao1'];
 $dates1 =  $row['ngay'];
  $birthDateTime = new DateTime($birthDate); 
  $currentDateTime = new DateTime();
   $interval = $currentDateTime->diff($birthDateTime); 
   $years = $interval->y; 
   $months = $interval->m; 
   $days = $interval->d; 
  $monthss = $interval->y * 12 + $interval->m;
  }

  $sql_cangnang1 = "SELECT cannang.ngay , cannang.cannang1 , cannang.chiucao1 FROM cannang,be
where be.username=cannang.username and cannang.username = '$user' ";
$query_cangnang1 = mysqli_query($mysqli, $sql_cangnang1);
$dates = [];
$weights = [];
if ($query_cangnang1->num_rows > 0) 
{ while  ($row = $query_cangnang1->fetch_assoc()) {
 $weight[] = $row['cannang1'];
 $height[] = $row['chiucao1'];
 $dates[] =  $row['ngay'];
}
  }

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kích Thước Con Yêu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
        <button onclick="goBack()" class="back-button">&larr;</button>
            <h1>KÍCH THƯỚC CON YÊU</h1>
        </header>
        <main>
      
            <div class="profile">
                <img src="congdong/uploadss/unnamed.png" alt="Baby Icon" class="profile-icon">
                <div class="profile-name">phung</div>
            </div>
    
            <div class="info">
                <div class="info-item">Giới tính: <?php echo $gender ?> </div>
                <div class="info-item">Tuổi: <?php echo $months ?> Tháng <?php echo $days ?>  Ngày</div>
                <div class="info-item">Cân Nặng: <?php echo $weight1 ?> kg</div>
                <div class="info-item">Chiều Cao: <?php echo $height1 ?> cm</div>
            </div>
            <div style=" display: flex; justify-content: space-between;">
            <div>
            <div class="chart-container">
                <h2>Biểu đồ cân nặng của con:</h2>
                <canvas id="weightChart" width="600" height="300"></canvas>
            </div>
            <button class="manage-weight-button"> <a href="themcannang.php" style="color: #FFF;text-decoration: none;"> 
            QUẢN LÝ CÂN NẶNG </a></button>
            </div>
            <div>
            
            <div class="chart-container">
                <h2>Biểu đồ chiều cao của con:</h2>
                <canvas id="heightChart" width="600" height="300"></canvas>
            </div>
            <button class="manage-weight-button"> <a href="themchieucao.php" style="color: #FFF;text-decoration: none;"> 
            QUẢN LÝ CHIỀU CAO </a></button>
            </div>
            </div>
        </main>
  
    </div>
    <script>
window.onload = function() {
    try {
        // Biểu đồ cân nặng
        var weightCanvas = document.getElementById('weightChart');
        var weightCtx = weightCanvas.getContext('2d');

        var dates = <?php echo json_encode($dates); ?>;
        var weights = <?php echo json_encode($weight); ?>;
        var heights = <?php echo json_encode($height); ?>;

        // Chuyển đổi dữ liệu thành đối tượng Date và sắp xếp theo ngày
        var data = [];
        for (var i = 0; i < dates.length; i++) {
            data.push({
                date: new Date(dates[i]),
                weight: weights[i],
                height: heights[i]
            });
        }

        // Sắp xếp mảng theo ngày tháng
        data.sort(function(a, b) {
            return a.date - b.date;
        });

        // Cập nhật lại mảng dates, weights, heights sau khi sắp xếp
        dates = data.map(item => item.date);
        weights = data.map(item => item.weight);
        heights = data.map(item => item.height);

        // In ra để kiểm tra
        console.log('Dates:', dates);
        console.log('Weights:', weights);
        console.log('Heights:', heights);

        // Kiểm tra nếu không có dữ liệu
        if (!dates.length || (!weights.length && !heights.length)) {
            console.error("Không có dữ liệu để vẽ biểu đồ.");
            return;
        }

       

        // Lọc ngày và dữ liệu cân nặng có dữ liệu
        var filteredDates = [];
        var filteredWeights = [];
        for (var i = 0; i < dates.length; i++) {
            if (weights[i]) { // Kiểm tra nếu có dữ liệu cân nặng
                filteredDates.push(dates[i]);
                filteredWeights.push(weights[i]);
            }
        }

        dates = dates.map(date => {
            let d = new Date(date);
            return formatDate(d);
        });

        filteredDates = filteredDates.map(date => {
            let d = new Date(date);
            return formatDate(d);
        });

        // Vẽ biểu đồ cân nặng
        drawWeightChart(weightCtx, weightCanvas, filteredDates, filteredWeights);

        // Biểu đồ chiều cao
        var heightCanvas = document.getElementById('heightChart');
        var heightCtx = heightCanvas.getContext('2d');

        // Lọc ngày và dữ liệu chiều cao có dữ liệu
        var filteredHeightDates = [];
        var filteredHeights = [];
        for (var i = 0; i < dates.length; i++) {
            if (heights[i]) { // Kiểm tra nếu có dữ liệu chiều cao
                filteredHeightDates.push(dates[i]);
                filteredHeights.push(heights[i]);
            }
        }

        // Vẽ biểu đồ chiều cao với dữ liệu đã lọc
        drawHeightChart(heightCtx, heightCanvas, filteredHeightDates, filteredHeights);
    } catch (error) {
        console.error("Có lỗi xảy ra khi tải biểu đồ:", error);
    }
};

function drawWeightChart(ctx, canvas, dates, weights) {
    try {
        // Kích thước biểu đồ và padding
        var width = canvas.width;
        var height = canvas.height;
        var padding = 50;

        // Tính toán khoảng cách giữa các điểm trên trục x và y
        var stepX = (width - 2 * padding) / (Math.min(dates.length, 20) - 1); // Giới hạn chỉ hiển thị tối đa 20 điểm trên biểu đồ
        var maxWeight = Math.max(...weights);
        var stepY = (height - 2 * padding) / maxWeight;

        // Vẽ trục x và y
        ctx.beginPath();
        ctx.moveTo(padding, padding);
        ctx.lineTo(padding, height - padding);
        ctx.lineTo(width - padding, height - padding);
        ctx.strokeStyle = '#000';
        ctx.stroke();

        // Vẽ đường đồ thị
        ctx.beginPath();
        ctx.moveTo(padding, height - padding - weights[0] * stepY);
        for (var i = 1; i < weights.length; i++) {
            ctx.lineTo(padding + i * stepX, height - padding - weights[i] * stepY);
        }
        ctx.strokeStyle = '#4CAF50';
        ctx.stroke();

        // Vẽ các điểm dữ liệu
        for (var i = 0; i < weights.length; i++) {
            ctx.beginPath();
            ctx.arc(padding + i * stepX, height - padding - weights[i] * stepY, 5, 0, 2 * Math.PI);
            ctx.fillStyle = '#4CAF50';
            ctx.fill();
            ctx.stroke();
        }

        // Ghi nhãn
        ctx.fillStyle = '#000';
        ctx.font = '12px Arial';
        for (var i = 0; i < weights.length; i++) {
            ctx.fillText(weights[i], padding + i * stepX - 10, height - padding - weights[i] * stepY - 10);
            ctx.fillText(dates[i], padding + i * stepX - 10, height - padding + 20);
        }

        // Ghi nhãn trục y
        ctx.fillText("Cân nặng (kg)", padding - 40, padding - 10);
    } catch (error) {
        console.error("Có lỗi xảy ra khi vẽ biểu đồ cân nặng:", error);
    }
}

function drawHeightChart(ctx, canvas, dates, heights) {
    try {
        // Kích thước biểu đồ và padding
        var width = canvas.width;
        var height = canvas.height;
        var padding = 50;

        // Tính toán khoảng cách giữa các điểm trên trục x và y
        var stepX = (width - 2 * padding) / (Math.min(dates.length, 20) - 1); // Giới hạn chỉ hiển thị tối đa 20 điểm trên biểu đồ
        var maxHeight = Math.max(...heights);
        var stepY = (height - 2 * padding) / maxHeight;

        // Vẽ trục x và y
        ctx.beginPath();
        ctx.moveTo(padding, padding);
        ctx.lineTo(padding, height - padding);
        ctx.lineTo(width - padding, height - padding);
        ctx.strokeStyle = '#000';
        ctx.stroke();

        // Vẽ đường đồ thị
        ctx.beginPath();
        ctx.moveTo(padding, height - padding - heights[0] * stepY);
        for (var i = 1; i < heights.length; i++) {
            ctx.lineTo(padding + i * stepX, height - padding - heights[i] * stepY);
        }
        ctx.strokeStyle = '#FF5722';
        ctx.stroke();

        // Vẽ các điểm dữ liệu
        for (var i = 0; i < heights.length; i++) {
            ctx.beginPath();
            ctx.arc(padding + i * stepX, height - padding - heights[i] * stepY, 5, 0, 2 * Math.PI);
            ctx.fillStyle = '#FF5722';
            ctx.fill();
            ctx.stroke();
        }

        // Ghi nhãn
        ctx.fillStyle = '#000';
        ctx.font = '12px Arial';
        for (var i = 0; i < heights.length; i++) {
            ctx.fillText(heights[i], padding + i * stepX - 10, height - padding - heights[i] * stepY - 10);
            ctx.fillText(dates[i], padding + i * stepX - 10, height - padding + 20);
        }

        // Ghi nhãn trục y
        ctx.fillText("Chiều cao (cm)", padding - 40, padding - 10);
    } catch (error) {
        console.error("Có lỗi xảy ra khi vẽ biểu đồ chiều cao:", error);
    }
}

function formatDate(date) {
    var day = date.getDate();
    var month = date.getMonth() + 1;
    return (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month;
}


function goBack() {
    window.history.back();
}
    </script>
   
    <script src="scripts.js"></script>
</body>
</html>
