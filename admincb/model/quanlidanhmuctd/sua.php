<?php
$sql_sua_danhmuctd = "SELECT * FROM tbl_danhmuctd WHERE id_danhmuctd='$_GET[iddanhmuc]' LIMIT 1 ";
$query_sua_danhmuctd = mysqli_query($mysqli, $sql_sua_danhmuctd);

?>

<p>Sửa danh mục sản phẩm</p>
<table border ="1" width ="50%" style="border-collapse: collapse;">
<?php
while( $row=mysqli_fetch_array($query_sua_danhmuctd)){
?>
<form method="POST" action="model/quanlidanhmuctd/xuli.php?iddanhmuc=<?php echo $row['id_danhmuctd'] ?>">  

<tr> 
   <td>Tên danh mục</td>
   <td><input type="text" name="tendanhmuc" value="<?php echo $row['tendanhmuctd'] ?>"></td>
  </tr>
 
  <tr>
  
    <td>Thứ tự</td>
    <td><input type="text" name="thutu"  value="<?php echo  $row['thutu'] ?>"></td>
  </tr>

  <tr>
    
    <td colspan="2"><input type="submit" name="suadanhmuc" value="sua danh mục thực phẩm"></td>
  </tr>
<?php
}
?>
  </form>
</table>
