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
            <h2>List Tài Khoản</h2>
        </div>
        <div class="bangl">
            <table>
                <tr>
                    <th>MÃ TK</th>
                    <th>Tên Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th> 
                    <th>Vai Trò</th>
                    <th>Active</th>
                </tr>
                <!-- -----------cách 1------------- -->
                <!-- <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a> <a href="' . $xoatk . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
                ?> -->
                <!-- -----------cách 2------------- -->
                <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            # code...
                            extract($taikhoan);
                            $suatk="index.php?act=suatk&id=".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                        }
                    ?>
            </table>

           
        </div>

    </div>

</div>