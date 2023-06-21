<?php
$sql_lietke_danhmuctd = "SELECT * FROM tbl_danhmuctd ORDER BY thutu DESC ";
$query_lietke_danhmuctd = mysqli_query($mysqli, $sql_lietke_danhmuctd);

?>
<p>Liệt kê danh mục theo doi </p>
<table style="width:100% ; border-collapse:collapse;" border="1">
    <tr>
        <th>id</th>
        <th>Tên danh mục</th>
        <th>quản lí</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmuctd)) {
        $i++;

    ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuctd'] ?></td>
            <td>
                <a href="model/quanlidanhmuctd/xuli.php?iddanhmuc=<?php echo $row['id_danhmuctd'] ?>">Xóa</a>|
                <a href="?action=quanlidanhmuctheodoi&query=sua&iddanhmuc=<?php echo $row['id_danhmuctd'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>