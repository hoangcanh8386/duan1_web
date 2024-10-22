<div class="boxspct">

    <div class="spchitiet">
        <div class="trai">
            <div class="imgct">
                <img src="<?php echo $img_path . $onesp['img'];  ?>" height="330px" width="340px">
            </div>
            <div class="cm">
                <strong>Sản phẩm chi tiết</strong>
                <hr>
                <span><?php echo $onesp['mota'];  ?></span>
            </div>
        </div>


        <div class="phai">
            <div class="namesp">
                <strong> <?php echo $onesp['name']; ?> </strong>
                <hr>
            </div>
            <div class="boxtt">
                <div class="cttrai">
                    <div class="price">
                        <p>Giá bán tại: <a href="">Hà nội</a></p>
                        <span>Giá gốc:</span>
                        <p class="tien"><?php echo number_format($onesp['price']);  ?> VND</p>
                        <!-- <span>Chỉ còn:</span>
                        <br><br>
                        <strong><?php
                                $tt = $onesp['price'] - (($onesp['price'] * $onesp['giam_gia']) / 100);
                                echo number_format($tt);
                                ?> VND</strong> -->
                    </div>
                    <div class="voucher">
                        <div class="imgvoucher">

                            <img src="./image/logomm.png" width="90px" height="60px" alt="">
                        </div>
                        <div class="test">
                            <strong>Thanh toán ngay với MoMo - Giảm tới 20%(Tối đa 80k)</strong>
                        </div>

                    </div>
                    <!-- <div class="bangsize">

                        <div class="sizes"><strong>Độ tuổi</strong></div>
                        <div class="size">1t-3t </div>
                        <div class="size">1t-3t </div>
                        <div class="size">4t>6t</div>
                        <div class="size">7t-9t</div>
                        <div class="size">9t-11t</div>
                    </div> -->
                    <form method="post" action="?act=buy">
                        <div class="soluong">
                            <div class="sol">
                                <input type="number" min="1" name="sl" value="1">
                            </div>
                            <?php if (isset($_SESSION['checkus']) && ($_SESSION['checkus'])) : ?>

                                <input type="hidden" name="idsp" value="<?php echo $onesp['id'] ?>">
                                <input type="hidden" name="img" value="<?php echo $onesp['img'] ?>">
                                <input type="hidden" name="namesp" value="<?php echo $onesp['name'] ?>">
                                <input type="hidden" name="gia" value="<?php echo $onesp['price'] ?>">
                                <div class="datmua">
                                    <button type="submit" name="submitbuy"><img src="./image/xehang.png" alt="" width="30px" height="30px"></button>
                                </div>
                    </from>
                            <?php endif; ?>
                        </div>
                </div>

                <div class="ctphai">
                    <div class="anhn"> <img src="./image/logobyu.png" width="200px" height="180px" alt=""></div>
                    <br><br>
                    <div class="luuy">
                        <ul>
                            <li>Đổi trả miễn Phí 15 ngày</li>
                            <br><br>
                            <li>Đổi trả chính hãng 12 tháng</li>
                            <br><br>
                            <li>Freeship dưới 7km</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluan/binhluan.php", {
                idpro: <?= $id ?>
            });
        });
    </script>
    <div class="spchitiet" id="binhluan">

    </div>



    <div style="display: block;" class="spchitiet">
        <div class="row tengoiy">
            <h3><strong>Sản Phẩm Liên Quan</strong></h3>
        </div>
        <div class="row boxcontent">

            <?php
            foreach ($sp_cungloai as $sp_cungloai) {
                extract($sp_cungloai);
                $img = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                echo ' <div class="boxspct">
                <a href="chitietsp.html">
                        <img src="' . $img . '" alt="" width="90"; height="100  "; />
                    </a>
                <a href="' . $linksp . '">' . $name . '</a>
                <hr>
                </div>';
            }
            ?>

        </div>
    </div>

</div>