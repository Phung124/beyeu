<?php
$sql_sua_td = "SELECT * FROM tbl_theodoi WHERE id_theodoi='$_GET[idtheodoi]' LIMIT 1 ";
$query_sua_td = mysqli_query($mysqli, $sql_sua_td);
?>
<p>sửa sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<?php
  while($row=mysqli_fetch_array($query_sua_td)){
    ?>
  <form method="POST" action="model/quanlitd/xuli.php?idtheodoi=<?php echo $row['id_theodoi']?>"enctype="multipart/form-data">
  

    <tr>
      <td>Mã td</td>
      <td><input type="text" name="matd" value="<?php echo $row['matd'] ?>"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh" >
      <img src="model/quanlitd/upload/<?php echo $row['hinhanh']?>"width="150px">
    </td>
    </tr>
    <tr>
      <td>Hình ảnhct</td>
      <td><input type="file" name="hinhanhct" >
      <img src="model/quanlitd/upload/<?php echo $row['hinhanhct']?>"width="150px">
    </td>
    </tr>
    <tr>
      <td>Tên thực phẩm</td>
      <td><input type="text" name="tentheodoi" value="<?php echo $row['tentheodoi'] ?>"></td>
    </tr>
    <tr>
      <td>PregnancyCare</td> 
      <td><textarea name="PregnancyCare" rows="3"  style="resize: none;" ><?php echo $row['PregnancyCare'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>Development</td> 
      <td><textarea name="Development" rows="3"  style="resize: none;" ><?php echo $row['PregnancyCare'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>Pregnancy</td> 
      <td><textarea name="Pregnancy" rows="3"  style="resize: none;" ><?php echo $row['Pregnancy'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>Checklist</td> 
      <td><textarea name="Checklist" rows="3"  style="resize: none;" ><?php echo $row['Checklist'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>PhysicalDevelopment</td> 
      <td><textarea name="PhysicalDevelopment" rows="3"  style="resize: none;" ><?php echo $row['PhysicalDevelopment'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>CognitiveDevelopment</td> 
      <td><textarea name="CognitiveDevelopment" rows="3"  style="resize: none;" ><?php echo $row['CognitiveDevelopment'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>SocialandEmotional</td> 
      <td><textarea name="SocialandEmotional" rows="3"  style="resize: none;" ><?php echo $row['SocialandEmotional'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>SpeechandLanguage</td> 
      <td><textarea name="SpeechandLanguage" rows="3"  style="resize: none;" ><?php echo $row['SpeechandLanguage'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>HealthandNutrition</td> 
      <td><textarea name="HealthandNutrition" rows="3"  style="resize: none;" ><?php echo $row['HealthandNutrition'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>title</td> 
      <td><textarea name="tomtat" rows="3"  style="resize: none;" ><?php echo $row['tomtat'] ?> 
    </textarea></td>
    </tr> 
   
     
    <tr>
      <td>Danh mục sản phẩm </td>
      <td>
      <select name="danhmuc" >
<?php 
$sql_danhmuctd="SELECT * FROM tbl_danhmuctd ORDER BY id_danhmuctd DESC";
$query_danhmuctd = mysqli_query($mysqli,$sql_danhmuctd);
while($row_danhmuctd= mysqli_fetch_array($query_danhmuctd)){
if($row_danhmuctd['id_danhmuctd']==$row['id_danhmuctd']){
  ?>
  <option selected value="<?php echo $row_danhmuctd['id_danhmuctd'] ?>"><?php echo $row_danhmuctd['tendanhmuctd'] ?></option>
  <?php
}else{
  ?>
   <option  value="<?php echo $row_danhmuctd['id_danhmuctd'] ?>"><?php echo $row_danhmuctd['tendanhmuctd'] ?></option>
  <?php
}
  ?>
  <?php
}
?>
      </select>
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="suatheodoi" value="Sửa theo doi"></td>
    </tr>
    <?php
  }
    ?>
  </form>
</table>