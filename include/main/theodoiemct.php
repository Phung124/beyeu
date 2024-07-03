<?php
$id = isset($_GET['id']) ? mysqli_real_escape_string($mysqli, $_GET['id']) : null;
$months = isset($_GET['months']) ? mysqli_real_escape_string($mysqli, $_GET['months']) : null;
if ($id !== null && $months === null) {
    $sql_theodoichitiet = "SELECT * FROM tbl_theodoi
    WHERE tbl_theodoi.id_theodoi = '$_GET[id]'  LIMIT 1 ";
   $query_theodoichitiet = mysqli_query($mysqli, $sql_theodoichitiet);
} else if( $id === null && $months !== null) {
$sql_theodoichitiet = "SELECT * FROM tbl_theodoi
 WHERE  tbl_theodoi.months = '$_GET[months]' LIMIT 1 ";
$query_theodoichitiet = mysqli_query($mysqli, $sql_theodoichitiet);
}
?>



<div class="center-panel">
<div>
<?php

while ($row = mysqli_fetch_array($query_theodoichitiet)) {


?>
<div class="pregnancy-view">
<div class="shadow-card no-pad tracker-calendar-card">
<div class="img-wrap">
    <div class="img-blur-wrap">
        <div ></div>
        <img src="admincb/model/quanlitd/upload/<?php echo $row['hinhanh'] ?>" alt="PregnancyView" loading="lazy">

    </div>
</div>
<div class="next-prev-section type-icon undefined">
    <aside class="left"></aside>
</div>
<div class="pregnancy-heading">
    <div>Tháng <?php echo $row['matd'] ?></div>
    <h1><?php echo $row['tentheodoi'] ?></h1>
</div>
<div class="pregnancy-description">
    <h3><span>Mô tả</span></h3>


</div>
<div class="text-desc"style="padding-left:20px;" >
    <p><?php echo $row['tomtat'] ?></p>
<h2 style=" margin-left: 208px;"> Phát triển thể chất</h2>
<ul>
    <li><?php echo $row['PhysicalDevelopment'] ?></li>
</ul>
<h2 style=" margin-left: 204px;">
 
Phát triển nhận thức
</h2>
<p><?php echo $row['CognitiveDevelopment'] ?></p>
<h2 style=" margin-left: 138px;">
Phát triển tình cảm và xã hội
</h2>
<p><?php echo $row['SocialandEmotional'] ?></p>
<h2 style=" margin-left: 135px;">
   
Phát triển lời nói và ngôn ngữ
</h2>
<p><?php echo $row['SpeechandLanguage'] ?></p>
<h2 style=" margin-left: 135px;">
   
Sức khỏe và dinh dưỡng
</h2>
<p><?php echo $row['HealthandNutrition'] ?></p>
</div>
</div>
</div>
<?php
    }
    ?>
</div>
</div>