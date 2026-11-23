<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET["id"];

    ?>
    <form action="index.php?page_layout=suakhoahoc&id=<?php echo $id ?>" method="post">
        <div class="box">
            <p>ID</p>
            <input name="ID" type="text">
        </div>
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
            <input type="submit" value="sửa">
        </div>
    </form>
    <?php
    include('connect.php');
    if (
        !empty($_POST['ID']) &&
        !empty($_POST['tenkhoahoc']) &&
        !empty($_POST['noidung']) &&
        !empty($_POST['mota']) &&
        !empty($_POST['giangvien'])
    ) {
        $id = $_POST['ID'];
        $tenkhoahoc = $_POST['tenkhoahoc'];
        $noidung = $_POST['noidung'];
        $mota = $_POST['mota'];
        $giangvien = $_POST['giangvien'];
        $sql = "UPDATE `khoa_hoc` SET id`='$id',`ten_khoa_hoc`='$tenkhoahoc',`noi_dung`=' $noidung',`mo_ta`='$mota',`giangvien_id`='[$giangvien]' WHERE  `id` = " . $_GET['id'];
        // echo $sql;
        mysqli_query($conn, $sql);
        header('location:index.php?page_layout=khoahoc');
    }
    ?>
</body>

</html>