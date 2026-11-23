<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài học</title>
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
            color: black;
            border: 1px solid black;
            padding: 2px 6px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1>Danh sách luyện tập</h1>
    <a href="index.php?page_layout=Themcauhoi" style="color: black">Thêm câu hỏi</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Câu hỏi</th>
            <th>Đáp án A</th>
            <th>Đáp án B</th>
            <th>Đáp án C</th>
            <th>Đáp án D</th>
            <th>Đáp án đúng</th>
            <th>Khóa học</th>
            <th>Chức năng</th>
        </tr>
        <?php
        $sql = "SELECT bt.*, kh.ten_khoa_hoc FROM `bai_tap` bt JOIN `khoa_hoc` kh ON bt.id_khoa_hoc=kh.id";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['noi_dung'] ?></td>
                <td><?= htmlspecialchars($row['dap_an_1']) ?></td>
                <td><?= htmlspecialchars($row['dap_an_2']) ?></td>
                <td><?= htmlspecialchars($row['dap_an_3']) ?></td>
                <td><?= htmlspecialchars($row['dap_an_4']) ?></td>
                <td><?= $row['dap_an_dung'] ?></td>
                <td><?= $row['ten_khoa_hoc'] ?></td>
                <td>
                    <a class="btn" href="index.php?page_layout=Suacauhoi&id=<?= $row['id'] ?>">Sửa</a>
                    <a class="btn" href="index.php?page_layout=Xoacauhoi&id=<?= $row['id'] ?>"
                        onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>