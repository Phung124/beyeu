<div class="clean"></div>
<div class="main">
    <?php
    if (isset($_GET['action'])&&$_GET['query']) {
        $tam = $_GET['action'];
        $query=$_GET['query'];
    } else {
        $tam = '';
        $query='';
    }
    if ($tam == 'quanlidanhmucthucpham'&& $query=='them') {
        include("quanlidanhmuctp/them.php");
        include("quanlidanhmuctp/lietke.php");
    }
    else if ($tam == 'quanlidanhmucthucpham'&& $query=='sua') {
        include("quanlidanhmuctp/sua.php");
       
    }
    else if ($tam == 'quanlithucpham'&& $query=='them') {
        include("quanlitp/them.php");
        include("quanlitp/lietke.php");
    }
    else if ($tam == 'quanlithucpham'&& $query=='sua') {
        include("quanlitp/sua.php");
    }
    else if ($tam == 'quanlidanhmuctheodoi'&& $query=='them') {
        include("quanlidanhmuctd/them.php");
        include("quanlidanhmuctd/lietke.php");
    }
    else if ($tam == 'quanlidanhmuctheodoi'&& $query=='sua') {
        include("quanlidanhmuctd/sua.php");
       
    }
    else if ($tam == 'quanlitheodoi'&& $query=='them') {
        include("quanlitd/them.php");
        include("quanlitd/lietke.php");
    }
    else if ($tam == 'quanlitheodoi'&& $query=='sua') {
        include("quanlitd/sua.php");
    }
    else if ($tam == 'quanlitiemchung'&& $query=='them') {
            include("quanlitc/them.php");
            include("quanlitc/lietke.php");
        }
    else if ($tam == 'quanlitiemchung'&& $query=='sua') {
            include("quanlitc/sua.php");
    }
     else {
        include("model/dashboard.php");
    }
    ?>
</div>