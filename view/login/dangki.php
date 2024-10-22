<div style="margin-top: 100px;" class="container">
    <div class="vehome">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
        </svg>
        <a href="index.php">Quay Lại Trang Chủ</a>
    </div>

    <div class="row col-6">
        <h3 style="padding-left: 515px;">Đăng Kí Tài Khoản</h3>
        <div class="col-3"></div>
        <div class="col-6">
            <form action="index.php?act=dangky" method="post" onsubmit="return validateForm()">
                <div class="mb-3">
                    Email
                    <input type="email" name="email" id="email" class="form-control">
                    <span id="emailError" style="color: red; display: none;">Vui lòng nhập địa chỉ email.</span>
                </div>
                <div class="mb-3">
                    Tài Khoản
                    <input type="text" name="user" id="user" class="form-control">
                    <span id="userError" style="color: red; display: none;">Vui lòng nhập tên tài khoản.</span>
                </div>
                <div class="mb-3">
                    Mật khẩu
                    <input type="password" name="pass" id="pass" class="form-control">
                    <span id="passError" style="color: red; display: none;">Vui lòng nhập mật khẩu.</span>
                </div>
                <div id="successMessage" style="color: green; display: none;">Đăng ký thành công. Vui lòng đăng nhập.</div>
                <a style="float: left; text-decoration: none; color: black;" href="?act=quenmk">Quên Mật Khẩu</a>
                <a style="float: right; text-decoration: none;" href="?act=login">Đã Có Tài Khoản</a>
                <div class="mb-7" style="padding-top: 30px;">
                    <input type="submit" value="Đăng ký" class="btn btn-primary" name="dangky">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var email = document.getElementById("email").value;
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;

        if (email == "") {
            document.getElementById("emailError").style.display = "inline";
            return false;
        } else {
            document.getElementById("emailError").style.display = "none";
        }

        if (user == "") {
            document.getElementById("userError").style.display = "inline";
            return false;
        } else {
            document.getElementById("userError").style.display = "none";
        }

        if (pass == "") {
            document.getElementById("passError").style.display = "inline";
            return false;
        } else {
            document.getElementById("passError").style.display = "none";
        }

        // Hiển thị thông báo khi đăng ký thành công
        document.getElementById("successMessage").style.display = "block";
        return true;
    }
</script>
