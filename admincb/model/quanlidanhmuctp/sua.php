<?php
$sql_sua_danhmuctp = "SELECT * FROM tbl_danhmuctp WHERE id_danhmuctp='$_GET[iddanhmuc]' LIMIT 1 ";
$query_sua_danhmuctp = mysqli_query($mysqli, $sql_sua_danhmuctp);

?>

<p>Sửa danh mục sản phẩm</p>
<table border ="1" width ="50%" style="border-collapse: collapse;">
<?php
while( $row=mysqli_fetch_array($query_sua_danhmuctp)){
?>
<form method="POST" action="model/quanlidanhmuctp/xuli.php?iddanhmuc=<?php echo $row['id_danhmuctp'] ?>">  

<tr> 
   <td>Tên danh mục</td>
   <td><input type="text" name="tendanhmuc" value="<?php echo $row['tendanhmuctp'] ?>"></td>
  </tr>
 
  <tr>
  
    <td>Thứ tự</td>
    <td><input type="text" name="thutu"  value="<?php echo  $row['thutu'] ?>"></td>
  </tr>
  <tr>
  
  <td>Hình ảnh</td>
  <td><input type="file" name="hinhanh" >
  <img src="model/quanlidanhmuctp/upload/<?php echo  $row['hinhanh']?> "width="150px">
</td>
</tr>
  <tr>
    
    <td colspan="2"><input type="submit" name="suadanhmuc" value="sua danh mục thực phẩm"></td>
  </tr>
<?php
}
?>
  </form>
</table>
