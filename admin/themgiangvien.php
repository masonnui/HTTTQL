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
        <h1>Thêm giảng viên</h1>
        <form action="index.php?page_layout=themgiangvien" method="post">
            <div class="box">
                <p>Tên đăng nhập</p>
                <input name="tendangnhap" type="text">
            </div>
            <div class="box">
                <p>Họ tên</p>
                <input name="hoten" type="text">
            </div>
            <div class="box">
                <p>Năm sinh</p>
                <input name="namsinh" type="date">
            </div>
            <div class="box">
                <p>Số điện thoại</p>
                <input name="sdt" type="text">
            </div>
            <div class="box">
                <p>Email</p>
                <input name="email" type="text">
            </div>
            <div class="box">
                <input type="submit" value="Them">
            </div>
        </form>
        <?php
        include("connect.php");
        if (
            !empty($_POST['tendangnhap']) &&
            !empty($_POST['hoten']) &&
            !empty($_POST['namsinh']) &&
            !empty($_POST['sdt']) &&
            !empty($_POST['email'])
        ) {
            $tendangnhap = $_POST['tendangnhap'];
            $hoten = $_POST['hoten'];
            $namsinh = $_POST['namsinh'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $sql = "INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `ho_ten`, `nam_sinh`, `sdt`, `email`) VALUES ('$tendangnhap','$hoten','$namsinh','$sdt','$email')";
            // echo $sql;
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=giangvien');
        } else {
            echo "<p1>Vui long nhap day du thong tin</p1>";
        }
        ?>
    </main>
</body>

</html>