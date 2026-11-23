<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách học viên</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 25px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
        }
    </style>
</head>

<body>

    <h1>Danh sách giảng viên</h1>
    <a class="btn" href="index.php?page_layout=themgiangvien">Thêm giảng viên</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Năm sinh</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Chức năng</th>
        </tr>

        <?php
        $sql = "SELECT `id`,`ho_ten`, `nam_sinh`, `sdt`, `email`,`vaitro_id`
        FROM `nguoi_dung`
        WHERE `vaitro_id` = 2";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['ho_ten'] ?></td>
                <td><?= $row['nam_sinh'] ?></td>
                <td><?= $row['sdt'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <a class="btn" href="index.php?page_layout=suakhoahoc&id=<?= $row['id'] ?>">Sửa</a>
                    <a class="btn" href="index.php?page_layout=xoakhoahoc&id=<?= $row['id'] ?>"
                        onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>