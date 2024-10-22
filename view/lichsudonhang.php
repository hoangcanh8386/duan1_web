<div class="container">
<button  type="submit" name="btnsub" class="btn btn-warning"><a style="text-decoration: none;"  href="?act=sanpham"><strong style="color: white;">Quay về</strong></a></button>

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
        <?php

        foreach ($dh as $value) :

        ?>
          <tr>
            <th scope="row"><?php echo $value['id'] ?></th>
            <td><?php echo $value['bill_name'] ?></td>
            <td><?php echo $value['bill_address'] ?></td>
            <td><?php echo $value['bill_address'] ?></td>
            <td><?php echo $value['bill_email'] ?></td>
            <td><?php
                switch ($value['bill_pttt']) {
                  case 0: {
                      echo "thanh toán trực tiếp";
                      break;
                    }
                  case 1: {
                      echo "chuyển khoản";
                      break;
                    }
                  case 2: {
                      echo "thanh toán online";
                      break;
                    }
                  default:
                    echo "thanh toán trực tiếp";
                    break;
                }
                ?></td>
            <td><?php echo $value['ngaydathang'] ?></td>
            <td><?php echo number_format($value['total']) ?> VND</td>
            <td><?php
                switch ($value['bill_status']) {
                  case 0: {
                      echo "Đơn Hàng Mới";
                      break;
                    }
                  case 1: {
                      echo "Đang xử lý ";

                      break;
                    }
                  case 2: {
                      echo "Đang giao hàng";

                      break;
                    }
                  case 3: {
                      echo "Đã nhận hàng";

                      break;
                    }
                  case 4: {
                      echo "Đã Hủy";
                      break;
                    }
                  case 5: {
                      echo "Hoàn Tất Đơn Hàng";
                      break;
                    }
                  default:
                    echo "Đơn Hàng Mới";
                    break;
                }
                ?></td>
            <td>
              <?php if ($value['bill_status'] == 0) : ?>
                <a style="text-decoration: none;" href="?act=huydh&iddh=<?php echo $value['id'] ?>">Hủy</a>
              <?php endif; ?>
              <?php if ($value['bill_status'] == 3) : ?>
                <a style="text-decoration: none;" href="?act=nhanhang&iddh=<?php echo $value['id'] ?>">Nhận Hàng</a>
              <?php endif; ?>
            </td>

            <td>
              <a style="text-decoration: none;" href="?act=ctdonhang&iddh=<?php echo $value['id'] ?>">Chi Tiết</a>
            </td>


          </tr>
        <?php endforeach;
        ?>

      </tbody>
    </table>
  </div>
</div>