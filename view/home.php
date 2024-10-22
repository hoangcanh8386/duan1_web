<?php include "menu.php"; ?>
<?php include "banner.php"; ?>
<div class="container">

    <div class="tieude">
        <h2><strong>Danh Mục Sản Phẩm</strong></h2>
    </div>
    <div class="topdm">
        <?php
        foreach ($dsdm as $dm) {
            extract($dm);
            $hinh = $img_path . $img;
            $linksp = "?act=sptheodanhmuc&iddm=" . $id;
            echo '<div class="chitiet">
            <div class="anhdm">
                <img src="' . $hinh . '" height="100px" width="100px" alt="">
            </div>
            <div class="tendm">
                <a href="' . $linksp . '">
                    ' . $name . '
                </a>
            </div>
        </div>
        ';
        }
        ?>

    </div>





    <div style="margin-top:50px" class="row top10sp">
        <div class="row">
            <h2 style="text-align:center;"><strong>Sản Phẩm Nổi Bật</strong></h2>
        </div>

        <div class="row top10sps ">
            <?php foreach ($top10 as $value) {
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
            ?>

                <div class="col-3">
                    <div class="card">
                        <img src="./upload/<?php echo $value['img'] ?>" class="card-img-top" alt="Fissure in Sandstone" height="260px"/>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['name'] ?></h5>
                            <hr>
                            <h6><?php echo $value['price'] ?>VNĐ</h6>
                            <div style="text-align: center;">
                                <button type="button" class="btn btn-warning"><a style="text-decoration: none;color:#fff;" href="?act=sanphamct&idsp=<?php echo $value['id'] ?>">Xem</a></button>
                                &emsp;&emsp;
                                <button type="submit" class="btn btn-warning"><a style="text-decoration: none;color:#fff" href="?act=sanphamct&idsp=<?php echo $value['id'] ?>">Mua</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>

    <div class="post">
        <div class="tieudepost" style="padding: 10px;">
            <h2><strong>Bài Viết Đáng Chú Ý</strong></h2>
        </div>
        <div class="postall" style="display: flex;">
            <div class="baipost_1" style="margin-right: 200px; margin-left: 35px;">
                <img src="./image/hoithao.png" alt="" width="500px" height="400px">
                <p><a href="">Bùng nổ cảm xúc cùng sự kiện Festival <br> F-Shop ra mắt quần áo mới diễn ra tại Hà Nội.</a></p>

            </div>
            <div class="baipost_2">
                <img src="./image/hoithao1.png" alt="" width="500px" height="400px">
                <p>
                    <a href="">Tại hội thảo, các chuyên gia trong lĩnh vực lớn<br> đã tổ chức các buổi mua sắm lớn.</a>
                </p>
            </div>
        </div>
    </div>
</div>