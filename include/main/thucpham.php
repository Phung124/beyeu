<?php
$sql_thucpham = "SELECT * FROM tbl_thucpham
 WHERE tbl_thucpham.id_danhmuctp = '$_GET[id]' ORDER BY thucpham_id DESC ";
$query_thucpham = mysqli_query($mysqli, $sql_thucpham);

$sql_pro = "SELECT * FROM tbl_danhmuctp
 WHERE id_danhmuctp = '$_GET[id]' LIMIT 1 ";
$query_pro = mysqli_query($mysqli, $sql_pro);
$row_title=mysqli_fetch_array($query_pro);
?>
<div class="center-panel">
            <div>
     
                <div class="food-page-title only-desktop">
                    <span><?php echo $row_title['tendanhmuctp'] ?></span>
                </div>
              
                <section class="only-desktop">
                <?php
while ($row = mysqli_fetch_array($query_thucpham)) {
       

       ?>
                    <div class="shadow-card">
                        <div class="tm-food-card ">
                            <a class="tmfc-title-warp" href="thucpham.php?quanly=thucphamct&id=<?php echo $row['thucpham_id'] ?>">
                                <img src="admincb/model/quanlitp/upload/<?php echo $row['hinhanhtp']?>" >
                            <span><?php echo $row['tenthucpham']?></span>
                            </a>
                            <p>
                                <a href="thucpham.php?quanly=thucphamct&id=<?php echo $row['thucpham_id'] ?>"><?php echo $row['tomtat']?></a>
                            </p>
                            <div>
                                <ul>
                                   <li>
                                    <svg class="icon" width="20" height="20" viewBox="0 0 246 247">…</svg>
                                    <span>Mang thai</span>
                                   </li> 
                                   <li>
                                    <svg class="icon" width="20" height="20" viewBox="0 0 246 247">…</svg>
                                    <span>Hậu sản </span>
                                   </li> 
                                   <li>
                                    <svg class="icon" viewBox="0 0 256 256" height="20" width="20"></svg>
                                    <span>Cho con bú</span>
                                   </li> 
                                   <li>
                                    <svg class="icon" width="20" height="20" viewBox="0 0 246 247">…</svg>
                                    <span>Trẻ sơ sinh </span>
                                   </li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
}
            ?>
                </section>
            </div>
            
            <div>
              
            </div>
            
          </div>