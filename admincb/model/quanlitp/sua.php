<?php
$sql_sua_tp = "SELECT * FROM tbl_thucpham WHERE thucpham_id='$_GET[idthucpham]' LIMIT 1 ";
$query_sua_tp = mysqli_query($mysqli, $sql_sua_tp);
?>
<p>sửa sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<?php
  while($row=mysqli_fetch_array($query_sua_tp)){
    ?>
  <form method="POST" action="model/quanlitp/xuli.php?idthucpham=<?php echo $row['thucpham_id']?>"enctype="multipart/form-data">
  

    <tr>
      <td>Mã tp</td>
      <td><input type="text" name="matp" value="<?php echo $row['matp'] ?>"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh" >
      <img src="model/quanlitp/upload/<?php echo $row['hinhanhtp']?>"width="150px">
    </td>
    </tr>
    <tr>
      <td>Tên thực phẩm</td>
      <td><input type="text" name="tenthucpham" value="<?php echo $row['tenthucpham'] ?>"></td>
    </tr>
    <tr>
      <td>mang thai</td> 
      <td><textarea name="mangthai" rows="3"  style="resize: none;" ><?php echo $row['mangthai'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>hậu sản</td> 
      <td><textarea name="hausan" rows="3"  style="resize: none;" ><?php echo $row['hausan'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>cho con bú</td> 
      <td><textarea name="choconbu" rows="3"  style="resize: none;" ><?php echo $row['choconbu'] ?> 
    </textarea></td>
    </tr>
    <tr>
      <td>trẻ sơ sinh</td> 
      <td><textarea name="tresosinh" rows="3"  style="resize: none;" ><?php echo $row['tresosinh'] ?> 
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
$sql_danhmuctp="SELECT * FROM tbl_danhmuctp ORDER BY id_danhmuctp DESC";
$query_danhmuctp = mysqli_query($mysqli,$sql_danhmuctp);
while($row_danhmuctp= mysqli_fetch_array($query_danhmuctp)){
if($row_danhmuctp['id_danhmuctp']==$row['id_danhmuctp']){
  ?>
  <option selected value="<?php echo $row_danhmuctp['id_danhmuctp'] ?>"><?php echo $row_danhmuctp['tendanhmuctp'] ?></option>
  <?php
}else{
  ?>
   <option  value="<?php echo $row_danhmuctp['id_danhmuctp'] ?>"><?php echo $row_danhmuctp['tendanhmuctp'] ?></option>
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
      <td colspan="2"><input type="submit" name="suathucpham" value="Sửa thực phẩm"></td>
    </tr>
    <?php
  }
    ?>
  </form>
</table>