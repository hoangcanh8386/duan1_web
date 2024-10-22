<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">
<button  type="submit" name="btnsub" class="btn btn-warning"><a style="text-decoration: none;"  href="?act=home"><strong style="color: white;">Quay về</strong></a></button>
    
        <form action="index.php?act=bieudo" method="post">
            <button style="float: right;margin-left: 10px;" type="submit" name="tk_donhang" class="btn btn-warning"><a style="text-decoration: none;"  href="index.php?act=bieudo"><strong style="color: white;">Thống Kê SP DANH SỐ BÁN HÀNG</strong></a></button>
            <button style="float: right;" type="submit" name="btnsub" class="btn btn-warning"><a style="text-decoration: none;"  href="index.php?act=bieudo"><strong style="color: white;">Thống Kê SP theo DM</strong></a></button>
        </form>
        
        

            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo '<tr>
                                    <td>' . $madm . '</td>
                                    <td>' . $tendm . '</td>
                                    <td>' . $countsp . '</td>
                                    <td>' . $maxprice . '</td>
                                    <td>' . $minprice . '</td>
                                    <td>' . $avgprice . '</td>
                                </tr>';
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

