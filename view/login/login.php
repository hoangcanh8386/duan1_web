<div style="margin-top: 100px;" class="container">
    <div class="vehome">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
        </svg>
        <a href="index.php">Quay Lại Trang Chủ</a>
    </div>

    <form action="" method="post">
        <div class="row">

            <h3 style="padding-left: 575px;">Đăng Nhập</h3>
            <div class="col-3">
            </div>
            <div class="col-6">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tài Khoản</label>
                        <input type="input" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <a style="float: left; text-decoration: none; color: black;" href="?act=quenmk">Quên Mật Khẩu</a>
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                        <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                        <a style="float: right; text-decoration: none;" href="?act=dangky">Đăng Kí Tài Khoản</a>
                    </div>
                    <button type="submit" name="sublogin" class="btn btn-primary">Đăng Nhập</button>
                </form>
            </div>
            <h5 style="color: red; padding-top: 10px;" class="thongbaoloi">
                <?php


                if (isset($thongbaolg) && ($thongbaolg != "")) {
                    echo $thongbaolg;
                }

                ?>
            </h5>
        </div>
        &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;
</div>