<h1>Đăng xuất</h1>
<form action="index.php?page_layout=Dangxuat" method="post">
    <input type="radio" name="okko" value="1">Có<br>
    <input type="radio" name="okko" value="2">Ko<br>
    <button type="submit">Xác nhận</button>
</form>
<?php
    if (!empty($_POST['okko'])) {
        $exit=$_POST['okko'];
        if ($exit=='1') {
            unset($_SESSION['username']);
            header('location: login.php');
        }
        if ($exit=='2'){
            header('location: index.php');
        }    
    }
?>