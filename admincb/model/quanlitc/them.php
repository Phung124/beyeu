<p>Thêm danh mục sản phẩm</p>
<table border ="1" width ="50%" style="border-collapse: collapse;">
<form method="POST" action="model/quanlitc/xuli.php" enctype="multipart/form-data">  
<tr> 
   <td>Tên tiem chung</td>
   <td><textarea name="tentiemchung" rows="3" style="resize: none;"></textarea></td>
</tr>
  <tr>
      <td>thang </td>
      <td>
      <select name="thang" >

      <option value=""></option>
                            <option value="1">sơ sinh </option>
                            <option value="2"> tháng 2</option>
                            <option value="3"> tháng 3</option>
                            <option value="4"> tháng 4</option>
                            <option value="6"> tháng 6</option>
                            <option value="7"> tháng 7</option>
                            <option value="9"> tháng 9</option>
                            <option value="10"> tháng 10</option>
                            <option value="12"> tháng 12</option>
 
      </select>
      </td>
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
  
    <td>lay lang</td>
    <td><textarea name="laylang" rows="3" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    
    <td colspan="2"><input type="submit" name="tiemchung" value="Thêm lich tiêm chung"></td>
  </tr>
  </form>
</table>
