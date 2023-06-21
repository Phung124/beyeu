<?php
$sql_theodoichitiet = "SELECT * FROM tbl_theodoi
 WHERE tbl_theodoi.id_theodoi = '$_GET[id]' LIMIT 1 ";
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
        <img src="admincb/model/quanlitd/upload/<?php echo $row['hinhanh'] ?>" alt="PregnancyView" loading="lazy">

    </div>
</div>
<div class="next-prev-section type-icon undefined">
    <aside class="left"></aside>
</div>
<div class="pregnancy-heading">
    <div>Modth <?php echo $row['matd'] ?></div>
    <h1><?php echo $row['tentheodoi'] ?></h1>
</div>
<div class="pregnancy-description">
    <h3><span>Description</span></h3>


</div>
<div class="text-desc"style="padding-left:20px;" >
    <p><?php echo $row['tomtat'] ?></p>
<h2 style=" margin-left: 208px;"> Physical Development</h2>
<ul>
    <li><?php echo $row['PhysicalDevelopment'] ?></li>
</ul>
<h2 style=" margin-left: 204px;">
 
    Cognitive Development
</h2>
<p><?php echo $row['CognitiveDevelopment'] ?></p>
<h2 style=" margin-left: 138px;">
    Emotional and Social Development
</h2>
<p><?php echo $row['SocialandEmotional'] ?></p>
<h2 style=" margin-left: 135px;">
   
    Speech and Language Development
</h2>
<p><?php echo $row['SpeechandLanguage'] ?></p>
<h2 style=" margin-left: 135px;">
   
Health and Nutrition
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