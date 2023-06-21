<?php
$sql_theodoichitiet = "SELECT * FROM tbl_tiemchung
 WHERE tbl_tiemchung.id_tiemchung = '$_GET[id]' LIMIT 1 ";
$query_theodoichitiet = mysqli_query($mysqli, $sql_theodoichitiet);
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

    </div>
</div>
<div class="next-prev-section type-icon undefined">
    <aside class="left"></aside>
</div>
<div class="pregnancy-heading">
    <div>Lịch tiêm chủng</div>
    <h1><?php echo $row['lichtiem'] ?></h1>
</div>
<div class="pregnancy-description">
    <h3><span>Description</span></h3>


</div>
<div class="text-desc"style="padding-left:20px;" >
    <p><?php echo $row['mota'] ?></p>
<h2>Lây lang</h2>
<ul>
    <li><?php echo $row['laylang'] ?></li>
</ul>
</div>
</div>
</div>
<?php
    }
    ?>
</div>
</div>