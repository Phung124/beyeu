<p>Thêm danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="model/quanlitp/xuli.php" enctype="multipart/form-data">
  
    <tr>
      <td>Mã tp</td>
      <td><input type="text" name="matp"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td>Tên thực phẩm</td>
      <td><input type="text" name="tenthucpham"></td>
    </tr>
    <tr>
      <td>Mang thai</td> 
      <td><textarea name="mangthai" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>hausan</td> 
      <td><textarea name="hausan" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>Choconbu</td> 
      <td><textarea name="choconbu" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>tresosinh</td> 
      <td><textarea name="tresosinh" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>title</td> 
      <td><textarea name="tomtat" rows="3" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>Danh mục sản phẩm </td>
      <td>
      <select name="danhmuc" >
<?php 
$sql_danhmuctp="SELECT * FROM tbl_danhmuctp ORDER BY id_danhmuctp DESC";
$query_danhmuctp = mysqli_query($mysqli,$sql_danhmuctp);
while($row_danhmuctp= mysqli_fetch_array($query_danhmuctp)){

  ?>
  <option value="<?php echo $row_danhmuctp['id_danhmuctp'] ?>"><?php echo $row_danhmuctp['tendanhmuctp'] ?></option>
  <?php
}
?>
      </select>
      </td>
    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="themthucpham" value="Thêm thực phẩm"></td>
    </tr>
  </form>
</table>