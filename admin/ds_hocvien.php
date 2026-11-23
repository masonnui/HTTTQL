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
            color: black;
            border: 1px solid black;
            padding: 2px 6px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1>Danh sách học viên</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Năm sinh</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Vai trò</th>
        </tr>

        <?php
        $sql = "SELECT `id`,`ho_ten`, `nam_sinh`, `sdt`, `email`,`vaitro_id`
        FROM `nguoi_dung`
        WHERE `vaitro_id` = 3";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['ho_ten'] ?></td>
                <td><?= $row['nam_sinh'] ?></td>
                <td><?= $row['sdt'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['vaitro_id'] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>