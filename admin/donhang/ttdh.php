<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="container"><button  type="submit" name="btnsub" class="btn btn-warning"><a style="text-decoration: none;"  href="?act=donhang"><strong style="color: white;">Quay về</strong></a></button>

    <div class="row">
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tài khoản</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Sdt</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phương thức</th>
                    <th scope="col">Ngày đặt hàng</th>
                    <th scope="col">Tổng</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $bill['id'] ?></th>
                    <td><?php echo $bill['bill_name'] ?></td>
                    <td><?php echo $bill['bill_address'] ?></td>
                    <td><?php echo $bill['bill_tel'] ?></td>
                    <td><?php echo $bill['bill_email'] ?></td>
                    <td><?php
                        switch ($bill['bill_pttt']) {
                            case 0: {
                                    echo "Chuyển khoản";
                                    break;
                                }
                            case 1: {
                                    echo "Thanh toán khi nhận hàng";
                                    break;
                                }
                            case 2: {
                                    echo "Thanh toán online";
                                    break;
                                }
                            default:
                                echo "Thanh toán trực tiếp";
                                break;
                        }
                        ?></td>
                    <td><?php echo $bill['ngaydathang'] ?></td>
                    <td><?php echo number_format($bill['total']) ?> VND</td>
                    <td>
                        <form action="?act=ttdh" method="post">
                            <input type="hidden" name="iddh" value="<?php echo $bill['id']?>">
                        
                        <select class="form-select" name="ttdh" aria-label="Default select example">
                        <?php for($i=0; $i<5; $i++): ?>            
                                <option value="<?= $i?>" <?= ($bill['bill_status']==$i)?'selected':''?>>
                                    <?php
                                    if ($i == 0) {
                                        echo 'Đơn Hàng Mới';
                                    } else if($i==1) {
                                        echo 'Đang Xử lý';
                                    }
                                    else if($i==2) {
                                        echo 'Đang Giao Hàng';
                                    }
                                    else if($i==3) {
                                        echo 'Đã nhận hàng';
                                    }
                                    else if($i==4) {
                                        echo 'Đã Hủy';
                                    }
                                    ?>
                                </option>
                            <?php endfor ?>
                        </select>
                    </td>
                    <td><button type="submit" name="btnsub" class="btn btn-warning">Cập Nhật</button></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</div>