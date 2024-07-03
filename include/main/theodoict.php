
<?php
$id = isset($_GET['id']) ? mysqli_real_escape_string($mysqli, $_GET['id']) : null;
$matd = isset($_GET['matd']) ? mysqli_real_escape_string($mysqli, $_GET['matd']) : null;
if ($id !== null && $matd === null) {
    $sql_theodoichitiet = "SELECT * FROM tbl_theodoi
    WHERE tbl_theodoi.id_theodoi = '$_GET[id]'  LIMIT 1 ";
   $query_theodoichitiet = mysqli_query($mysqli, $sql_theodoichitiet);
} else if( $id === null && $matd !== null) {
$sql_theodoichitiet = "SELECT * FROM tbl_theodoi
 WHERE  tbl_theodoi.matd = '$_GET[matd]' AND tbl_theodoi.PregnancyCare is not NULL LIMIT 1 ";
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
        <img src="admincb/model/quanlitd/upload/<?php echo $row['hinhanhct'] ?>" alt="PregnancyView" loading="lazy">

    </div>
</div>
<div class="next-prev-section type-icon undefined">
    <aside class="left"></aside>
</div>
<div class="pregnancy-heading">
    <div>Tuần <?php echo $row['matd'] ?></div>
    <h1><?php echo $row['tentheodoi'] ?></h1>
</div>
<div class="pregnancy-description">
    <h3><span>Mô tả</span></h3>


</div>
<div class="text-desc"style="padding-left:20px;" >
    <p><?php echo $row['tomtat'] ?></p>
<h2>Sự phát triển của con bạn</h2>
<ul>
    <li><?php echo $row['PregnancyCare'] ?></li>
</ul>
<h2>
    <br>
    Triệu chứng mang thai
</h2>
<p><?php echo $row['Development'] ?></p>
<h2>
    <br>
    Chăm sóc thai kỳ
</h2>
<p><?php echo $row['Pregnancy'] ?></p>
<h2>
    <br>
    Danh sách kiểm tra của bạn
</h2>
<p><?php echo $row['Checklist'] ?></p>
</div>
</div>
</div>
<?php
    }
    ?>
</div>
</div>