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
                    <li><a href="index.php?page_layout=Baihoc">Bài học</a></li>
                    <li><a href="index.php?page_layout=Luyentap">Luyện tập</a></li>
                </ul>
            </ul>
            <ul>
                <li>Xin chao,<?php echo $_SESSION['username']?> </li>
                <li><a href="../index.php">Đăng xuất</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            if (isset($_GET['page_layout'])) {
                switch ($_GET['page_layout']) {
                    case 'Baihoc':
                        include "baihoc.php";
                        break;
                    case 'Luyentap':
                        include "luyentap.php";
                        break;
                    case 'Themcauhoi':
                        include "chucnang/themcauhoi.php";
                        break;
                    case 'Suacauhoi':
                        include "chucnang/suacauhoi.php";
                        break;
                    case 'Xoacauhoi':
                        include "chucnang/xoacauhoi.php";
                        break;
                    default:
                        break;
                }
            }
        ?>
    </main>