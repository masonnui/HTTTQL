<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
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
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
        }
        .nut{
            margin-bottom: 10px;
        }

    </style>
</head>

<body>
    <h1>Danh sách khóa học</h1>
    <div class="nut"><a class="btn" href="index.php?page_layout=themkhoahoc">Thêm khóa học</a></div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên khóa học</th>
            <th>Nội dung</th>
            <th>Mô tả</th>
            <th>Giảng viên</th>
            <th>Chức năng</th>
        </tr>

        <?php
        $sql = "
    SELECT kh.*, nd.ho_ten AS giang_vien
    FROM khoa_hoc kh
    JOIN nguoi_dung nd ON kh.giangvien_id = nd.id
";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['ten_khoa_hoc'] ?></td>
                <td><?= $row['noi_dung'] ?></td>
                <td><?= $row['mo_ta'] ?></td>
                <td><?= $row['giang_vien'] ?></td>
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