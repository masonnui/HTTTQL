<h1>Sửa câu hỏi</h1>
<?php
    $idch=$_GET['id'];

?>
<form action="index.php?page_layout=Suacauhoi&id=<?php echo $idch?>" method="post">
        <div>
            <input type="text" name="quest" placeholder="Câu hỏi">
        </div>
        <div>
            <input type="text" name="answer1" placeholder="Đáp án A">
        </div>
        <div>
            <input type="text" name="answer2" placeholder="Đáp án B">
        </div>
        <div>
            <input type="text" name="answer3" placeholder="Đáp án C">
        </div>
        <div>
            <input type="text" name="answer4" placeholder="Đáp án D">
        </div>
        <div>
            <input type="text" name="trueanswer" placeholder="Đáp án đúng">
        </div>
        <div>
            <p>Khóa học</p>
            <select name="khoa" id="">
                <?php
                    $sqlk="SELECT * FROM `khoa_hoc`";
                    $re=mysqli_query($conn,$sqlk);
                    while($khoa=mysqli_fetch_array($re)){
                ?>
                <option value="<?php echo $khoa['id']?>"><?php echo $khoa['ten_khoa_hoc']?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <input type="submit" value="Thêm">
    </form>
    <?php
        if (!empty($_POST['quest']) &&
            !empty($_POST['answer1']) &&
            !empty($_POST['answer2']) &&
            !empty($_POST['answer3']) &&
            !empty($_POST['answer4']) &&
            !empty($_POST['khoa']) &&
            !empty($_POST['trueanswer'])) {

            $quest=$_POST['quest'];
            $answer1=$_POST['answer1'];
            $answer2=$_POST['answer2'];
            $answer3=$_POST['answer3'];
            $answer4=$_POST['answer4'];
            $true_answer=$_POST['trueanswer'];
            $khoa=$_POST['khoa'];

            $sql="UPDATE `bai_tap` SET `noi_dung`='$quest',`dap_an_1`='$answer1',`dap_an_2`='$answer2',
            `dap_an_3`='$answer3',`dap_an_4`='$answer4',`id_khoa_hoc`='$khoa',`dap_an_dung`='$true_answer' 
            WHERE id=$idch";
            mysqli_query($conn,$sql);
            header("location: index.php?page_layout=Luyentap");
        }
    ?>