<p>Thêm danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="model/quanlitd/xuli.php" enctype="multipart/form-data">
  
    <tr>
      <td>Mã td</td>
      <td><input type="text" name="matd"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td>Hình ảnhct</td>
      <td><input type="file" name="hinhanhct"></td>
    </tr>
    <tr>
      <td>Tên theo dõi</td>
    
      <td><textarea name="tentheodoi" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>PregnancyCare</td> 
      <td><textarea name="PregnancyCare" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>Development</td> 
      <td><textarea name="Development" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>Pregnancy</td> 
      <td><textarea name="Pregnancy" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>Checklist</td> 
      <td><textarea name="Checklist" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>PhysicalDevelopment</td> 
      <td><textarea name="PhysicalDevelopment" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>CognitiveDevelopment</td> 
      <td><textarea name="CognitiveDevelopment" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>SocialandEmotional</td> 
      <td><textarea name="SocialandEmotional" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>SpeechandLanguage</td> 
      <td><textarea name="SpeechandLanguage" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>HealthandNutrition</td> 
      <td><textarea name="HealthandNutrition" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>title</td> 
      <td><textarea name="tomtat" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>kinhnguyet </td>
      <td>
      <select name="kikinhnguyet" >

      <option value=""></option>
                            <option value="Kì kinh nguyệt thứ nhất">Kì kinh nguyệt thứ nhất </option>
                            <option value="Kì kinh nguyệt thứ hai">Kì kinh nguyệt thứ hai</option>
                            <option value="Kì kinh nguyệt thứ ba">Kì kinh nguyệt thứ ba</option>
 
      </select>
      </td>
    </tr>
    <tr>
      <td>thang </td>
      <td>
      <select name="thang" >

      <option value=""></option>
                            <option value="1 đến 6 tháng">1 đến 6 tháng </option>
                            <option value="7 đến 12 tháng">7 đến 12 tháng</option>
                            <option value="13 đến 18 tháng">13 đến 18 tháng</option>
                            <option value="19 đến 48 tháng">19 đến 48 tháng</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Danh mục sản phẩm </td>
      <td>
      <select name="danhmuc" >
<?php 
$sql_danhmuctd="SELECT * FROM tbl_danhmuctd ORDER BY id_danhmuctd DESC";
$query_danhmuctd = mysqli_query($mysqli,$sql_danhmuctd);
while($row_danhmuctd= mysqli_fetch_array($query_danhmuctd)){

  ?>
  <option value="<?php echo $row_danhmuctd['id_danhmuctd'] ?>"><?php echo $row_danhmuctd['tendanhmuctd'] ?></option>
  <?php
}
?>
      </select>
      </td>
    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="themtheodoi" value="Thêm theo dõi"></td>
    </tr>
  </form>
</table>