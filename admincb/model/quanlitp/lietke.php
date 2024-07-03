<?php
$sql_lietke_tp = "SELECT * FROM tbl_thucpham,tbl_danhmuctp WHERE tbl_thucpham.id_danhmuctp=tbl_danhmuctp.id_danhmuctp 
ORDER BY thucpham_id DESC ";
$query_lietke_tp = mysqli_query($mysqli, $sql_lietke_tp);

?>
<p>Liệt kê thực phẩm </p>
<table style="width:100% ; border-collapse:collapse;" border="1">
    <tr>
        <th>id</th>
        <th>matp</th>
        <th>Tên thực phẩm</th>
        <th>hình ảnh</th>
        <th>Mang thai </th>
        <th>Hậu sản</th>
        <th>Choconbu</th>
        <th>Tresosinh</th>
        <th>tóm tắt</th>
        <th>danh mục</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_tp)) {
        $i++;

    ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['matp'] ?></td>
            <td><?php echo $row['tenthucpham'] ?></td>
            <td><img src="model/quanlitp/upload/<?php echo $row['hinhanhtp']?>" width="150px"></td>
            <td><?php echo $row['mangthai'] ?></td>
            <td><?php echo $row['hausan'] ?></td>
            <td><?php echo $row['choconbu'] ?></td>
            <td><?php echo $row['tresosinh'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php echo $row['tendanhmuctp'] ?></td>
            <td>
                <a href="model/quanlitp/xuli.php?idthucpham=<?php echo $row['thucpham_id'] ?>">Xóa</a>|
                <a href="?action=quanlithucpham&query=sua&idthucpham=<?php echo $row['thucpham_id'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>