<?php
$sql_thucphamchitiet = "SELECT * FROM tbl_thucpham,tbl_danhmuctp
 WHERE tbl_thucpham.id_danhmuctp=tbl_danhmuctp.id_danhmuctp 
 AND tbl_thucpham.thucpham_id = '$_GET[id]' LIMIT 1 ";
$query_thucphamchitiet = mysqli_query($mysqli, $sql_thucphamchitiet);
?>
<div class="center-panel">
    <?php

    while ($row = mysqli_fetch_array($query_thucphamchitiet)) {


    ?>
        <div>
            <div class="detail-title-wrap">
                <span class="close only-desktop">
                    <a href="thucpham.php?quanly=thucpham&id=<?php echo $row['id_danhmuctp'] ?>"> <i class="fa-solid fa-arrow-left"></i></a>
                   
                </span>
                <h1 class="close only-desktop"><?php echo $row['tendanhmuctp'] ?></h1>
            </div>
            <div class="food-detail-container">
                <div class="food-detail-wrapper">
                    <div class="food-detail-image">
                        <img class="glassd" style="width: 100%;height: 400px;" src="admincb/model/quanlitp/upload/<?php echo $row['hinhanhtp']?>" alt="glass-placeholder" loading="lazy">

                    </div>
                </div>
                <div class="category-detail-wrap">
                    <h1 class="category-name"><?php echo $row['tenthucpham'] ?></h1>
                    <p><?php echo $row['tendanhmuctp'] ?></p>

                </div>
                <div class="food-detail-wrap">
                    <div class="permission-heading">
                        <svg class="icon nutrition-icon " width="20px" height="20px" viewBox="0 0 464 436">…</svg>
                        <span>Dinh dưỡng</span>
                    </div>
                    <p><?php echo $row['tomtat'] ?></p>
                    <div class="permission-detail-wrap">
                        <div class="permission-heading">
                            <svg class="icon cautious-icon " width="20" height="20" viewBox="0 0 246 247">…</svg>
                            <span>Mang thai</span>
                        </div>
                        <p><?php echo $row['mangthai'] ?></p>
                        <div class="permission-heading">
                            <svg class="icon cautious-icon " width="20" height="20" viewBox="0 0 246 247">…</svg>
                            <span>Hậu sản</span>
                        </div>
                        <p><?php echo $row['hausan'] ?></p>
                        <div class="permission-heading">
                            <svg class="icon cautious-icon " width="20" height="20" viewBox="0 0 246 247">…</svg>
                            <span>Cho con bú</span>
                        </div>
                        <p><?php echo $row['choconbu'] ?></p>
                        <div class="permission-heading">
                            <svg class="icon cautious-icon " width="20" height="20" viewBox="0 0 246 247">…</svg>
                            <span>Trẻ sơ sinh</span>
                        </div>
                        <p><?php echo $row['tresosinh'] ?></p>

                    </div>

                </div>
            </div>
        </div>

        <div>

        </div>
    <?php
    }
    ?>
</div>