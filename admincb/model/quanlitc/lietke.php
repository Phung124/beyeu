<?php
$sql_lietke_tc = "SELECT * FROM tbl_tiemchung ORDER BY thang DESC ";
$query_lietke_tc = mysqli_query($mysqli, $sql_lietke_tc);

?>
<p>Liệt kê tiem chủng </p>
<table style="width:100% ; border-collapse:collapse;" border="1">
    <tr>
        <th>id</th>
        <th>Tên tên chuẩn</th>
        <th>tháng</th>
        <th>mô tả</th>
        <th>lịch tiêm</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_tc)) {
        $i++;

    ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tentiemchung'] ?></td>
            <td><?php echo $row['thang'] ?></td>
            <td><?php echo $row['mota'] ?></td>
            <td><?php echo $row['lichtiem'] ?></td>
            <td><?php echo $row['laylang'] ?></td>
            <td>
                <a href="model/quanlitc/xuli.php?idtiemchung=<?php echo $row['id_tiemchung'] ?>">Xóa</a>|
                <a href="?action=quanlitiemchung&query=sua&idtiemchung=<?php echo $row['id_tiemchung'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>