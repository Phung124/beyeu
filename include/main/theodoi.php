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
?>
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
                    <p>Track your baby's growth month by month with all important milestones</p>
                    <ul>

                        <li>
                            <span>kì kinh nguyệt thứ nhất</span>
                           
                        </li>
                        <li>
                           
                            <span>kì kinh nguyệt thứ hai</span>
                            
                        </li>
                        <li>
                            
                            <span>kì kinh nguyệt thứ ba</span>
                        </li>
                       
                    </ul>
                    <div>
                        <div class="date-range-slider">
                            <div class="slick-slider slick-initialized" dir="ltr">
                                <div class="slick-list">
                                    <div class="slick-track" style="width: 2405px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                    <?php
while ($row4 = mysqli_fetch_array($query_theodoi1)) {
       

       ?>
                                    <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 65px;">
                                            <div>
                                                <div tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <aside class>
                                                        <p>tuần</p>
                                                        <span><?php echo $row4['matd']?></span>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
}
                        ?>

                                    </div>
                                </div>
                                <button type="button" data-role="none" class="slick-arrow slick-prev slick-disabled" style="display: block;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <section>
                        <p id="calendarListSectionsId-1" class="section-title">Tam cá nguyệt thứ nhất</p>
                        <div class="calendar-list">
                        <?php
while ($row1 = mysqli_fetch_array($query_td1)) {
       

       ?>
        <a href="theodoi.php?quanly=theodoict&id=<?php echo $row1['id_theodoi']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
                                        <strong>Week<?php echo $row1['matd']?></strong>

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
                    <section>
                        <p id="calendarListSectionsId-1" class="section-title">Tam cá nguyệt thứ hai</p>
                        <div class="calendar-list">
                        <?php
while ($row2 = mysqli_fetch_array($query_td2)) {
       

       ?>
                            <a href="theodoi.php?quanly=theodoict&id=<?php echo $row2['id_theodoi']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                                <div class="tc-title">
                                    <h2>
                                        <strong>Week<?php echo $row2['matd']?></strong>

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
                    <section>
                        <p id="calendarListSectionsId-1" class="section-title">Tam cá nguyệt thứ ba</p>
                        <div class="calendar-list">
                        <?php
while ($row3 = mysqli_fetch_array($query_td3)) {
       

       ?>
                            <a href="theodoi.php?quanly=theodoict&id=<?php echo $row3['id_theodoi']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                                <div class="tc-title">
                                    <h2>
                                        <strong>Week<?php echo $row3['matd']?></strong>

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