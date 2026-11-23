<main>
    <section class="tieude">
                <div class="tieude-card1">
                    <i class="fa-solid fa-book"></i>
                    <div class="soluong">
                        <?php
                            $sql="SELECT * FROM `khoa_hoc`";
                            $result=mysqli_query($conn,$sql);
                            $tong=0;
                            while ($a=mysqli_fetch_array($result)) {
                                $tong=$tong+1;
                            }
                        ?>
                        <h2><?php echo $tong?></h2>
                        <p>Khóa học</p>
                    </div>
                </div>
                <div class="tieude-card2" style="background-color: #3498db;">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div class="soluong">
                        <?php
                            $sql="SELECT * FROM `bai_hoc`";
                            $result=mysqli_query($conn,$sql);
                            $tong=0;
                            while ($b=mysqli_fetch_array($result)) {
                                $tong=$tong+1;
                            }
                        ?>
                        <h2><?php echo $tong?></h2>
                        <p>Bài học</p>
                    </div>
                </div>
                <div class="tieude-card3" style="background-color: orange;">
                    <i class="fa-solid fa-chart-line"></i>
                    <div class="soluong">
                        <h2>70%</h2>
                        <p>Tiến trình</p>
                    </div>
                </div>
            </section>
            <section class="khoahoc">
                <h3>Khóa học của bạn</h3>
                <div class="khoahoc-list1">
                    <div class="khoahoc-card">
                        <h4>HTML cơ bản</h4>
                        <p>20 bài học</p>
                        <div style="width: 60%"></div>
                        <button>Tiếp tục học</button>
                    </div>
                    <div class="khoahoc-card">
                        <h4>CSS cơ bản</h4>
                        <p>20 bài học</p>
                        <div style="width: 60%"></div>
                        <button>Tiếp tục học</button>
                    </div>
                    <div class="khoahoc-card">
                        <h4>lập trình web cơ bản</h4>
                        <p>20 bài học</p>
                        <div style="width: 60%"></div>
                        <button>Tiếp tục học</button>
                    </div>
                </div>
                <div class="khoahoc-list2">
                    <div class="khoahoc-card">
                        <h4>HTML cơ bản</h4>
                        <p>20 bài học</p>
                        <div style="width: 60%"></div>
                        <button>Tiếp tục học</button>
                    </div>
                    <div class="khoahoc-card">
                        <h4>CSS cơ bản</h4>
                        <p>20 bài học</p>
                        <div style="width: 60%"></div>
                        <button>Tiếp tục học</button>
                    </div>
                    <div class="khoahoc-card">
                        <h4>lập trình web cơ bản</h4>
                        <p>20 bài học</p>
                        <div style="width: 60%"></div>
                        <button>Tiếp tục học</button>
                    </div>
                </div>
            </section>
</main>