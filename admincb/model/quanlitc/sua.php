<?php
$sql_sua_tiemchung = "SELECT * FROM tbl_tiemchung WHERE id_tiemchung='$_GET[idtiemchung]' LIMIT 1 ";
$query_sua_tiemchung = mysqli_query($mysqli, $sql_sua_tiemchung);

?>

<p>Sửa tiêm chủng</p>
<table border ="1" width ="50%" style="border-collapse: collapse;">
<?php
while( $row=mysqli_fetch_array($query_sua_tiemchung)){
?>
<form method="POST" action="model/quanlitc/xuli.php?idtiemchung=<?php echo $row['id_tiemchung'] ?>">  

<tr> 
   <td>Tên tiêm chủng</td>
   <td><textarea name="tentiemchung" rows="3" style="resize: none;"></textarea></td>
  </tr>

  <tr>
  
  <td>Lịch tiêm</td>
  <td><textarea name="lichtiem" rows="3" style="resize: none;"></textarea></td>
</tr>
<tr>
  
    <td>mota</td>
    <td><textarea name="mota" rows="3" style="resize: none;"></textarea></td>
  </tr>
  <tr>
  
    <td>lây lang</td>
    <td><textarea name="laylang" rows="3" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    
    <td colspan="2"><input type="submit" name="sualichtiem" value="sua lịch tiêm"></td>
  </tr>
<?php
}
?>
  </form>
</table>
