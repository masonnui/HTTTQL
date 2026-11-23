<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="baihoc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <h2>Khóa học</h2>
    <div style="display: grid; grid-template-columns: repeat(5,1fr); gap: 10px;">
        <?php
            $sql="SELECT kh.*, nd.ho_ten FROM `khoa_hoc` kh JOIN `nguoi_dung` nd ON kh.giangvien_id=nd.id";
            $result=mysqli_query($conn,$sql);
            while($khoa=mysqli_fetch_array($result)){
                $idkhoa=$khoa['id'];
        ?>
        <div onclick="xembh(<?php echo $idkhoa?>)" style=" border: solid 3px;">
            <p>Tên khóa học: <?php echo $khoa['ten_khoa_hoc']?></p>
            <?php
                $sqlbh="SELECT * FROM `bai_hoc` where khoahoc_id=$idkhoa";
                $rebh=mysqli_query($conn,$sqlbh);
                $tong=0;
                while ($b=mysqli_fetch_array($rebh)) {
                    $tong=$tong+1;
                }
            ?>
            <p>Số bài học: <?php echo $tong?> bài</p>
            <p>Mô tả: <?php echo $khoa['mo_ta']?></p>
            <p>Giảng viên: <?php echo $khoa['ho_ten']?></p>
        </div>
        <?php
            }
        ?>
     </div>
</body>
</html>