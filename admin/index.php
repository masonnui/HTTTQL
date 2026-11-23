<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <style>
        body {
            margin: 0;
        }

        nav {
            background-color: deepskyblue;
            display: flex;
            justify-content: space-between;
        }

        ul {
            display: flex;
            list-style: none;
            margin: 0;
        }

        li {
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: orange;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header('location: ../login.php');
    }
    include('../connect.php');
    ?>
    <header>
        <nav>
            <ul>
                <ul>
                    <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                    <li><a href="index.php?page_layout=khoahoc">Khóa học</a></li>
                    <li><a href="index.php?page_layout=giangvien">Giảng viên</a></li>
                    <li><a href="index.php?page_layout=hocvien">Học viên</a></li>
                </ul>
            </ul>
            <ul>
                <li>Xin chao,<?php echo $_SESSION['username']?> </li>
                <li><a href="index.php?page_layout=dangxuat">Dang xuat</a></li>
            </ul>
        </nav>
    </header>
    <?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {

            case 'trangchu':
                include "trangchu.php";
                break;
            case 'khoahoc':
                include "ds_khoahoc.php";
                break;

            case 'giangvien':
                include "ds_giangvien.php";
                break;
            case 'hocvien':
                include "ds_hocvien.php";
                break;
            case 'dangxuat':
                include "../dangxuat.php";
                break;
            case 'themkhoahoc':
                include "themkhoahoc.php";
                break;
            case 'suakhoahoc':
                include "suakhoahoc.php";
                break;
            case 'xoakhoahoc':
                include "xoakhoahoc.php";
                break;
            case 'themgiangvien':
                include "themgiangvien.php";
                break;
            case 'xoagiangvien':
                include "xoagiangvien.php";
                break;
            default:
                include "trangchu.php";
                break;
        }
    }
    ?>
</body>

</html>