<?php
$sql_lietke_danhmuctp = "SELECT * FROM tbl_danhmuctp ORDER BY thutu DESC ";
$query_lietke_danhmuctp = mysqli_query($mysqli, $sql_lietke_danhmuctp);

?>
<div class="stick-painel">
            <div class="arsp-body">
              <div class="left-panel">
                <div class="shadow-cart">
                  <div class="food-category-section">
                    <ul class="category-list">
                    <?php
   
    while ($row = mysqli_fetch_array($query_lietke_danhmuctp)) {
       

    ?>
                        <li class="category-item">
                            <a href="thucpham.php?quanly=thucpham&id=<?php echo $row['id_danhmuctp'] ?>">
                                <img class="category-image" src="admincb/model/quanlidanhmuctp/upload/<?php echo $row['hinhanh']?>" title="category-img" alt="" loading="lazy">
                                <span class="category-title"><?php echo $row['tendanhmuctp'] ?></span>
                            </a>
                        </li>
                   <?php 
    }
    ?>
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>