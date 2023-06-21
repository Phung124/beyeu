<?php
include("../../config/config.php");
$matp = $_POST['matp'];
$tenthucpham =$_POST['tenthucpham'];
$mangthai =$_POST['mangthai'];
$hausan =$_POST['hausan'];
$choconbu =$_POST['choconbu'];
$tresosinh =$_POST['tresosinh'];
$tomtat =$_POST['tomtat'];
$hinhanh = time().'_'.$hinhanh;
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$iddanhmuc =$_POST['danhmuc'];
move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);

if(isset($_POST['themthucpham'])){
    
    $sql_them = "INSERT INTO tbl_thucpham(matp,hinhanhtp,tenthucpham,mangthai,hausan,choconbu,tresosinh,tomtat,id_danhmuctp) VALUES('".$matp."','".$hinhanh."','".$tenthucpham."','".$mangthai."','".$hausan."','".$choconbu."','".$tresosinh."','".$tomtat."','".$iddanhmuc."')" ;
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
    header("Location:../../index.php?action=quanlithucpham&query=them");
}else if(isset($_POST['suathucpham'])){
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
      
        $sql_update = "UPDATE tbl_thucpham SET tenthucpham='".$tenthucpham."',matp='".$matp."',hinhanhtp='".$hinhanh."',mangthai='".$mangthai."',hausan='".$hausan."',choconbu='".$choconbu."',tresosinh='".$tresosinh."',tomtat='".$tomtat."',id_danhmuctp='".$iddanhmuc."'
     WHERE thucpham_id='$_GET[idthucpham]' " ;
    //xoa
    $sql = "SELECT * FROM tbl_thucpham WHERE thucpham_id ='$_GET[idthucpham]' LIMIT  1 ";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
    unlink('upload/'.$row['hinhanhtp']);
        }
}else {
    $sql_update = "UPDATE tbl_thucpham SET tenthucpham='".$tenthucpham."',matp='".$matp."',mangthai='".$mangthai."',hausan='".$hausan."',choconbu='".$choconbu."',tresosinh='".$tresosinh."',tomtat='".$tomtat."',tomtat='".$tomtat."',id_danhmuctp='".$iddanhmuc."' WHERE thucpham_id='$_GET[idthucpham]' " ;
    
}
mysqli_query($mysqli,$sql_update);
header("Location:../../index.php?action=quanlithucpham&query=them");
}
else{
    $id=$_GET['idthucpham'];
    $sql = "SELECT * FROM tbl_thucpham WHERE thucpham_id ='$id' LIMIT  1 ";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
unlink('upload/'.$row['hinhanh']);
    }

$sql_xoa="DELETE FROM tbl_thucpham WHERE thucpham_id='".$id."'";
mysqli_query($mysqli,$sql_xoa);
header("Location:../../index.php?action=quanlithucpham&query=them");
}
