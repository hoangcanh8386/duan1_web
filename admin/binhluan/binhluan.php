<div class="row box">
    <div class="boxtrai">
        <div class="loai logoam tren">
            <img src="../image/logovip.jpg" width="150px" height="150px" alt="">
        </div>
        <div class="loai hieuung">
            <ul>
                <li><a href="?act=adddm">Danh Mục</a></li>
                <li><a href="?act=addsp">Sản Phẩm</a></li>
                <li><a href="?act=taikhoan">Tài Khoản</a></li>
                <li><a href="?act=dsbl">Bình Luận</a></li>
                <li><a href="?act=donhang">Đơn Hàng</a></li>
                <li><a href="index.php?act=thongke">Thống Kê</a></li>
                <li><a href="../index.php">Quay về Trang Chủ</a></li>
            </ul>
        </div>

    </div>
    <div class="boxphai">
        <div class="tieudeb">
            <h2>List Bình Luận</h2>
        </div>
        <div class="bangl">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội Dung</th>
                    <!-- <th>ID User</th>
                    <td>' . $iduser . '</td> -->
                    <th>ID pro</th>
                    <th>Ngày Bình Luận</th>
                    <th></th>
                </tr>
                <!-- -----------cách 1------------- -->
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $noidung . '</td>
                            
                            <td>' . $idpro . '</td>
                            <td>' . $ngaybinhluan . '</td>
                            <td> <a href="' . $xoabl . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
                ?>
                <!-- -----------cách 2------------- -->
                <!-- <?php foreach ($listdanhmuc as $danhmuc) : ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $danhmuc['id'] ?></td>
                        <td><img style="width: 85px; height:100px;" src="<?= '../upload/' . $danhmuc['img'] ?>" alt=""></td>
                        <td><?= $danhmuc['name'] ?></td>
                        <td>
                            <a href="index.php?act=suadm&id=<?= $danhmuc['id'] ?>" class="confim">Sửa</a>
                            <a onclick="return confirm('bạn có chắc xóa không ?')" href="index.php?act=xoadm&id=<?= $danhmuc['id'] ?>" class="confim">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?> -->

            </table>


        </div>

    </div>

</div>