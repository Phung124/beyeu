<?php
$sql_theodoi = "SELECT * FROM tbl_theodoi WHERE id_danhmuctd=3
 ORDER BY matd ASC ";
$query_theodoi = mysqli_query($mysqli, $sql_theodoi);
$sql_theodoi1 = "SELECT * FROM tbl_theodoi
WHERE id_danhmuctd=3
 ORDER BY id_theodoi ASC ";
$query_theodoi1 = mysqli_query($mysqli, $sql_theodoi1);
$sql_td1 = "SELECT * FROM tbl_theodoi
 WHERE id_danhmuctd=3 AND tbl_theodoi.kinhnguyet='kì kinh nguyệt thứ nhất ' ORDER BY id_theodoi ASC ";
$query_td1 = mysqli_query($mysqli, $sql_td1);
$sql_td2 = "SELECT * FROM tbl_theodoi
 WHERE id_danhmuctd=3 AND  tbl_theodoi.kinhnguyet='kì kinh nguyệt thứ hai ' ORDER BY id_theodoi ASC ";
$query_td2 = mysqli_query($mysqli, $sql_td2);
$sql_td3 = "SELECT * FROM tbl_theodoi
 WHERE id_danhmuctd=3 AND  tbl_theodoi.kinhnguyet='kì kinh nguyệt thứ ba ' ORDER BY id_theodoi ASC ";
$query_td3 = mysqli_query($mysqli, $sql_td3);
?><script>
function scrollToMonth(month) {
  const monthSection = document.getElementById(`month-${month}`);
  if (monthSection) {
    monthSection.scrollIntoView({ behavior: 'smooth' });
  }
}
</script>
<div class="center-panel">
    <div>
        <div class="tracker-calendar-container">
            <div class="calendar-switcher">
                <a href="theodoi.php?quanly=theodoi&id=2" class="selected">Mẹ bầu </a>
                <a href="theodoi.php?quanly=theodoiem&id=3">Em bé</a>
            </div>
            <div class="switcher-body">
                <div class="shadow-card no-pad preg-switcher-body">
                    <h1>Theo dõi tuần thai</h1>
                    <p>Theo dõi sự tăng trưởng của bé qua từng tháng với tất cả các mốc quan trọng</p>
                    <ul>

                        <li onclick="scrollToMonth(1)">
                            <span>kì kinh nguyệt thứ nhất</span>
                           
                        </li>
                        <li onclick="scrollToMonth(2)">
                           
                            <span>kì kinh nguyệt thứ hai</span>
                            
                        </li>
                        <li onclick="scrollToMonth(3)" >
                            
                            <span>kì kinh nguyệt thứ ba</span>
                        </li>
                       
                    </ul>
                    <div>
                    <ul class="header-list">
                        <li class="header-iteam header-iteam--qr">
                            <a href="" class="header-iteam-link">
                               Số đo vòng eo mẹ bầu
                               </a>
                            <div class="header-notify">
                                <header class="header-notify-header">
                                    <img src="assets/images/abc.webp" alt="">
                                </header>
                            
                    </div>
                </div>
                <div id="month-1" class="month-section">
                    <section>
                        <p id="calendarListSectionsId-1" class="section-title">Tam cá nguyệt thứ nhất</p>
                        <div class="calendar-list">
                        <?php
while ($row1 = mysqli_fetch_array($query_td1)) {
       

       ?>
        <a href="theodoi.php?quanly=theodoict&id=<?php echo $row1['id_theodoi']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
                                        <strong>Tuần<?php echo $row1['matd']?></strong>

                                        <?php echo $row1['tentheodoi']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>">

                                    </div>
                                </div>
                                <p>
                                <?php echo $row1['tomtat']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                    <span>Đọc thêm</span>
                                        <svg class="icon right-double-arrow-regular-gray-md " enable-background="new 0 0 32 32" height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg">…</svg>
                                    </span>
                                </div>
                            </a>
                            <?php
}
                        ?>

                        </div>
                    </section>
                    <section id="month-2" class="month-section">
                        <p id="calendarListSectionsId-1" class="section-title">Tam cá nguyệt thứ hai</p>
                        <div class="calendar-list">
                        <?php
while ($row2 = mysqli_fetch_array($query_td2)) {
       

       ?>
                            <a href="theodoi.php?quanly=theodoict&id=<?php echo $row2['id_theodoi']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                                <div class="tc-title">
                                    <h2>
                                        <strong>Tuần<?php echo $row2['matd']?></strong>

                                        <?php echo $row2['tentheodoi']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <img src="admincb/model/quanlitd/upload/<?php echo $row2['hinhanh']?>">

                                    </div>
                                </div>
                                <p>
                                <?php echo $row2['tomtat']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                         <span>Đọc thêm</span>
                                        <svg class="icon right-double-arrow-regular-gray-md " enable-background="new 0 0 32 32" height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg">…</svg>
                                    </span>
                                </div>
                            </a>
                            <?php
}
                        ?>
                           
                        </div>
                    </section>
                    <section id="month-3" class="month-section">
                        <p id="calendarListSectionsId-1" class="section-title">Tam cá nguyệt thứ ba</p>
                        <div class="calendar-list">
                        <?php
while ($row3 = mysqli_fetch_array($query_td3)) {
       

       ?>
                            <a href="theodoi.php?quanly=theodoict&id=<?php echo $row3['id_theodoi']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                                <div class="tc-title">
                                    <h2>
                                        <strong>Tuần<?php echo $row3['matd']?></strong>

                                        <?php echo $row3['tentheodoi']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <img src="admincb/model/quanlitd/upload/<?php echo $row3['hinhanh']?>">

                                    </div>
                                </div>
                                <p>
                                <?php echo $row3['tomtat']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                    <span>Đọc thêm</span>
                                        <svg class="icon right-double-arrow-regular-gray-md " enable-background="new 0 0 32 32" height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg">…</svg>
                                    </span>
                                </div>
                            </a>
                            <?php
}
                        ?>
                        </div>
                    </section>
                </div>
            </div>

        </div>

    </div>
</div>