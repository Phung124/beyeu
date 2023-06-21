<?php
include("../../config/config.php");
$matd = $_POST['matd'];
$tentheodoi =$_POST['tentheodoi'];
$PregnancyCare =$_POST['PregnancyCare'];
$Development =$_POST['Development'];
$Pregnancy =$_POST['Pregnancy'];
$Checklist =$_POST['Checklist'];
$PhysicalDevelopment =$_POST['PhysicalDevelopment'];
$CognitiveDevelopment =$_POST['CognitiveDevelopment'];
$SocialandEmotional =$_POST['SocialandEmotional'];
$SpeechandLanguage =$_POST['SpeechandLanguage'];
$HealthandNutrition =$_POST['HealthandNutrition'];
$tomtat =$_POST['tomtat'];

$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];

$hinhanhct=$_FILES['hinhanhct']['name'];
$hinhanh_tmpct=$_FILES['hinhanhct']['tmp_name'];
$kikinhnguyet=$_POST['kikinhnguyet'];
$thang=$_POST['thang'];
$iddanhmuc =$_POST['danhmuc'];
move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
move_uploaded_file($hinhanh_tmpct,'upload/'.$hinhanhct);

if(isset($_POST['themtheodoi'])){
    $sql_them = "INSERT INTO tbl_theodoi(matd,hinhanh,hinhanhct,tentheodoi,PregnancyCare,Development,Pregnancy,Checklist,PhysicalDevelopment,CognitiveDevelopment,SocialandEmotional,SpeechandLanguage,HealthandNutrition,tomtat,kinhnguyet,thang,id_danhmuctd) VALUES('".$matd."','".$hinhanh."','".$hinhanhct."','".$tentheodoi."','".$PregnancyCare."','".$Development."','".$Pregnancy."','".$Checklist."','".$PhysicalDevelopment."','".$CognitiveDevelopment."','".$SocialandEmotional."','".$SpeechandLanguage."','".$HealthandNutrition."','".$tomtat."','".$kikinhnguyet."','".$thang."','".$iddanhmuc."')" ;
    mysqli_query($mysqli,$sql_them);

    move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
    move_uploaded_file($hinhanh_tmpct,'upload/'.$hinhanhct);
    header("Location:../../index.php?action=quanlitheodoi&query=them");
}else if(isset($_POST['suatheodoi'])){
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
        move_uploaded_file($hinhanh_tmpct,'upload/'.$hinhanhct);
        $sql_update = "UPDATE tbl_theodoi SET tentheodoi='".$tentheodoi."',matd='".$matd."',hinhanh='".$hinhanh."',hinhanhct='".$hinhanhct."',PregnancyCare='".$PregnancyCare."',Development='".$Development."',Pregnancy='".$Pregnancy."',Checklist='".$Checklist."',PhysicalDevelopment='".$PhysicalDevelopment."',CognitiveDevelopment='".$CognitiveDevelopment."',SocialandEmotional='".$SocialandEmotional."',SpeechandLanguage='".$SpeechandLanguage."',HealthandNutrition='".$HealthandNutrition."',tomtat='".$tomtat."',id_danhmuctd='".$iddanhmuc."'
     WHERE id_theodoi='$_GET[idtheodoi]' " ;
    //xoa
    $sql = "SELECT * FROM tbl_theodoi WHERE id_theodoi ='$_GET[idtheodoi]' LIMIT  1 ";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
    unlink('upload/'.$row['hinhanh']);
        }
}else {
    $sql_update = "UPDATE tbl_theodoi SET tentheodoi='".$tentheodoi."',matd='".$matd."',PregnancyCare='".$PregnancyCare."',Development='".$Development."',Pregnancy='".$Pregnancy."',Checklist='".$Checklist."',PhysicalDevelopment='".$PhysicalDevelopment."',CognitiveDevelopment='".$CognitiveDevelopment."',SocialandEmotional='".$SocialandEmotional."',SpeechandLanguage='".$SpeechandLanguage."',HealthandNutrition='".$HealthandNutrition."',tomtat='".$tomtat."',id_danhmuctd='".$iddanhmuc."'
    WHERE id_theodoi='$_GET[idtheodoi]' " ;
    
}
mysqli_query($mysqli,$sql_update);
header("Location:../../index.php?action=quanlitheodoi&query=them");
}
else{
    $id=$_GET['idtheodoi'];
    $sql = "SELECT * FROM tbl_theodoi WHERE id_theodoi ='$id' LIMIT  1 ";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
unlink('upload/'.$row['hinhanh']);
    }

$sql_xoa="DELETE FROM tbl_theodoi WHERE id_theodoi='".$id."'";
mysqli_query($mysqli,$sql_xoa);
header("Location:../../index.php?action=quanlitheodoi&query=them");
}
