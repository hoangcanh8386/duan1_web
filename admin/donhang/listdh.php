<?php
// Sắp xếp mảng $listbill theo trường ngaydathang giảm dần
usort($listbill, function($a, $b) {
    return strtotime($b['ngaydathang']) - strtotime($a['ngaydathang']);
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button type="submit" name="btnsub" class="btn btn-warning"><a style="text-decoration: none;" href="?act=home"><strong style="color: white;">Quay về</strong></a></button>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Sdt</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Tên hàng</th> -->
                        <th scope="col">Phương thức</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Tổng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listbill as $value) : ?>
                        <tr>
                            <th scope="row"><?php echo $value['id'] ?></th>
                            <td><?php echo $value['bill_name'] ?></td>
                            <td><?php echo $value['bill_address'] ?></td>
                            <td><?php echo $value['bill_tel'] ?></td>
                            <td><?php echo $value['bill_email'] ?></td>
                            <!-- <td>
                                <img src="<?php echo $cart_item['product_img']; ?>" alt="">
                            </td> -->
                            <td><?php
                                switch ($value['bill_pttt']) {
                                    case 0:
                                        echo "Chuyển khoản";
                                        break;
                                    case 1:
                                        echo "Thanh toán khi nhận hàng";
                                        break;
                                    case 2:
                                        echo "Thanh toán online";
                                        break;
                                    default:
                                        echo "Chuyển khoản";
                                        break;
                                }
                                ?></td>
                            <td><?php echo $value['ngaydathang'] ?></td>
                            <td><?php echo number_format($value['total']) ?> VND</td>
                            <td><?php
                                switch ($value['bill_status']) {
                                    case 0:
                                        echo "Đơn Hàng Mới";
                                        break;
                                    case 1:
                                        echo "Đang xử lý ";
                                        break;
                                    case 2:
                                        echo "Đang giao hàng";
                                        break;
                                    case 3:
                                        echo "Đã nhận hàng";
                                        break;
                                    case 4:
                                        echo "Đã hủy";
                                        break;
                                    default:
                                        echo "Đơn Hàng Mới";
                                        break;
                                }
                                ?></td>
                            <td><a href="?act=ttdh&iddh=<?php echo $value['id'] ?>">xem</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
