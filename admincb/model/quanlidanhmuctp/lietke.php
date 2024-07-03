<?php
$sql_lietke_danhmuctp = "SELECT * FROM tbl_danhmuctp ORDER BY thutu DESC ";
$query_lietke_danhmuctp = mysqli_query($mysqli, $sql_lietke_danhmuctp);

?>
<p>Liệt kê danh mục thực phẩm </p>
<table style="width:100% ; border-collapse:collapse;" border="1">
    <tr>
        <th>id</th>
        <th>Tên danh mục</th>
        <th>hình ảnh</th>
        <th>quản lí</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmuctp)) {
        $i++;

    ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuctp'] ?></td>
            <td><img src="model/quanlidanhmuctp/upload/<?php echo $row['hinhanh']?>" width="150px"></td>
            <td>
                <a href="model/quanlidanhmuctp/xuli.php?iddanhmuc=<?php echo $row['id_danhmuctp'] ?>">Xóa</a>|
                <a href="?action=quanlidanhmucthucpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuctp'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>