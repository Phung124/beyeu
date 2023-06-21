<?php
$sql_lietke_td = "SELECT * FROM tbl_theodoi,tbl_danhmuctd WHERE tbl_theodoi.id_danhmuctd=tbl_danhmuctd.id_danhmuctd 
ORDER BY id_theodoi DESC ";
$query_lietke_td = mysqli_query($mysqli, $sql_lietke_td);

?>
<p>Liệt kê thực phẩm </p>
<table style="width:100% ; border-collapse:collapse;" border="1">
    <tr>
        <th>id</th>
        <th>matp</th>
        <th>Tên thực phẩm</th>
        <th>hình ảnh</th>
        <th>hinhf anh</th>
        <th>PregnancyCare </th>
        <th>Development</th>
        <th>Pregnancy</th>
        <th>Checklist</th>
        <th>PhysicalDevelopment</th>
        <th>CognitiveDevelopment </th>
        <th>SocialandEmotional</th>
        <th>SpeechandLanguage</th>
        <th>HealthandNutrition	</th>
        <th>kinhnguyet</th>
        <th>tháng</th>
        <th>tóm tắt</th>
        <th>danh mục</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_td)) {
        $i++;

    ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['matd'] ?></td>
            <td><?php echo $row['tentheodoi'] ?></td>
            <td><img src="model/quanlitd/upload/<?php echo $row['hinhanh']?>" width="150px"></td>
            <td><img src="model/quanlitd/upload/<?php echo $row['hinhanhct']?>" width="150px"></td>
            <td><?php echo $row['PregnancyCare'] ?></td>
            <td><?php echo $row['Development'] ?></td>
            <td><?php echo $row['Pregnancy'] ?></td>
            <td><?php echo $row['Checklist'] ?></td>
            <td><?php echo $row['PhysicalDevelopment'] ?></td>
            <td><?php echo $row['CognitiveDevelopment'] ?></td>
            <td><?php echo $row['SocialandEmotional'] ?></td>
            <td><?php echo $row['SpeechandLanguage'] ?></td>
            <td><?php echo $row['HealthandNutrition'] ?></td>
            <td><?php echo $row['kinhnguyet'] ?></td>
            <td><?php echo $row['thang'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php echo $row['tendanhmuctd'] ?></td>
            <td>
                <a href="model/quanlitd/xuli.php?idtheodoi=<?php echo $row['id_theodoi'] ?>">Xóa</a>|
                <a href="?action=quanlitheodoi&query=sua&idtheodoi=<?php echo $row['id_theodoi'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>