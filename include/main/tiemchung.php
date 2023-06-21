<?php
$sql_theodoi = "SELECT * FROM tbl_tiemchung 
 ";
$query_theodoi= mysqli_query($mysqli, $sql_theodoi);
$sql_theodoi1 = "SELECT * FROM tbl_tiemchung
";
$query_theodoi1 = mysqli_query($mysqli, $sql_theodoi1);
$sql_td1 = "SELECT * FROM tbl_tiemchung
 WHERE  tbl_tiemchung.thang='1'";
$query_td1 = mysqli_query($mysqli, $sql_td1);
$sql_td2 = "SELECT * FROM tbl_tiemchung
 WHERE   tbl_tiemchung.thang='2 '  ";
$query_td2 = mysqli_query($mysqli, $sql_td2);
$sql_td3 = "SELECT * FROM tbl_tiemchung
 WHERE   tbl_tiemchung.thang='3 ' ";
$query_td3 = mysqli_query($mysqli, $sql_td3);
$sql_td4 = "SELECT * FROM tbl_tiemchung
 WHERE  tbl_tiemchung.thang='4 ' ";
$query_td4 = mysqli_query($mysqli, $sql_td4);
$sql_td5 = "SELECT * FROM tbl_tiemchung
 WHERE   tbl_tiemchung.thang='6'  ";
$query_td5 = mysqli_query($mysqli, $sql_td5);
$sql_td6 = "SELECT * FROM tbl_tiemchung
 WHERE   tbl_tiemchung.thang='7'  ";
$query_td6 = mysqli_query($mysqli, $sql_td6);
$sql_td7 = "SELECT * FROM tbl_tiemchung
 WHERE   tbl_tiemchung.thang='9 '  ";
$query_td7 = mysqli_query($mysqli, $sql_td7);
$sql_td8 = "SELECT * FROM tbl_tiemchung
 WHERE   tbl_tiemchung.thang='10 '  ";
$query_td8 = mysqli_query($mysqli, $sql_td8);
$sql_td9 = "SELECT * FROM tbl_tiemchung
 WHERE   tbl_tiemchung.thang='12 ' ";
$query_td9 = mysqli_query($mysqli, $sql_td9);
?>
<div class="center-panel">
    <div>
        <div class="tracker-calendar-container">
            <div class="calendar-switcher">
               
           
            </div>
            <div class="switcher-body">
                <div class="shadow-card no-pad preg-switcher-body">
                    <h1>Theo dõi tuần thai</h1>
                    <p>Track your baby's growth month by month with all important milestones</p>
                    <ul>

                        <li>
                            <span>sơ sinh</span>
                           
                        </li>
                        <li>
                           
                            <span>tháng 2</span>
                            
                        </li>
                        <li>
                            
                            <span> tháng 3</span>
                        </li>
                        <li>
                            
                            <span> tháng 4</span>
                        </li>
                        <li>
                            
                            <span> tháng 6</span>
                        </li>
                        <li>
                            
                            <span> tháng 7</span>
                        </li>
                        <li>
                            
                            <span> tháng 9</span>
                        </li>
                        <li>
                            
                            <span> tháng 10</span>
                        </li>
                        <li>
                            
                            <span> tháng 12</span>
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
                        <p id="calendarListSectionsId-1" class="section-title">Sơ Sinh</p>
                        <div class="calendar-list">
                        <?php
while ($row1 = mysqli_fetch_array($query_td1)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row1['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row1['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row1['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 2</p>
                        <div class="calendar-list">
                        <?php
while ($row2 = mysqli_fetch_array($query_td2)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row2['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row2['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row2['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 3</p>
                        <div class="calendar-list">
                        <?php
while ($row3 = mysqli_fetch_array($query_td3)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row3['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row3['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row3['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 4</p>
                        <div class="calendar-list">
                        <?php
while ($row5 = mysqli_fetch_array($query_td4)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row5['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row5['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row5['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 6</p>
                        <div class="calendar-list">
                        <?php
while ($row6 = mysqli_fetch_array($query_td5)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row6['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row6['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row6['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 7</p>
                        <div class="calendar-list">
                        <?php
while ($row7 = mysqli_fetch_array($query_td6)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row7['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row7['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row7['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 9</p>
                        <div class="calendar-list">
                        <?php
while ($row8 = mysqli_fetch_array($query_td7)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row8['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row8['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row8['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 10</p>
                        <div class="calendar-list">
                        <?php
while ($row9 = mysqli_fetch_array($query_td8)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row9['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row9['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row9['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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
                        <p id="calendarListSectionsId-1" class="section-title">Tháng 12</p>
                        <div class="calendar-list">
                        <?php
while ($row10 = mysqli_fetch_array($query_td9)) {
       

       ?>
        <a href="tiemchung.php?quanly=tiemchungct&id=<?php echo $row10['id_tiemchung']?>" id="calendarCellId-4" class="pointer-click shadow-card no-pad tracker-calendar-card">
                               
                                <div class="tc-title">
                                    <h2>
              
                                        <?php echo $row10['tentiemchung']?>
                                    </h2>
                                </div>
                                <div class="img-wrap">
                                    <div class="img-blur-wrap">
                                        <div></div>
                                        <!-- <img src="admincb/model/quanlitd/upload/<?php echo $row1['hinhanh']?>"> -->

                                    </div>
                                </div>
                                <p>
                                <?php echo $row10['lichtiem']?>

                                </p>
                                <div class="read-more-wrap">
                                    <span>
                                        
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