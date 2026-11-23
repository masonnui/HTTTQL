<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main {
            width: 50%;
            margin: auto;
            background-color: pink;
            text-align: center;
        }

        p1 {
            text-align: left;
            color: red;
        }

        .box {
            margin-bottom: 10px;

        }
    </style>
</head>

<body>
    <main>
        <h1>Thêm khóa học</h1>
        <form action="index.php?page_layout=themkhoahoc" method="post">
            <div class="box">
                <p>Tên khóa học</p>
                <input name="tenkhoahoc" type="text">
            </div>
            <div class="box">
                <p>Nội dung</p>
                <input name="noidung" type="text">
            </div>
            <div class="box">
                <p>Mô tả</p>
                <input name="mota" type="text">
            </div>
            <div class="box">
                <p>ID giảng viên</p>
                <input name="giangvien" type="text">
            </div>
            <div class="box">
                <input type="submit" value="Them">
            </div>
        </form>
        <?php
        include("connect.php");
        if (
            !empty($_POST['tenkhoahoc']) &&
            !empty($_POST['noidung']) &&
            !empty($_POST['mota']) &&
            !empty($_POST['giangvien']) 
        ) {
            $tenkhoahoc = $_POST['tenkhoahoc'];
            $noidung = $_POST['noidung'];
            $mota = $_POST['mota'];
            $giangvien = $_POST['giangvien'];
            $sql = "INSERT INTO `khoa_hoc`(`ten_khoa_hoc`, `noi_dung`, `mo_ta`, `giangvien_id`) VALUES ('$tenkhoahoc','$noidung',' $mota','$giangvien')";
            // echo $sql;
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=khoahoc');
        } else {
            echo "<p1>Vui long nhap day du thong tin</p1>";
        }
        ?>
    </main>
</body>

</html>