<?php if(isset($_SESSION['giohang'])):
    $i = 0;?>
    
    <?php foreach($_SESSION['giohang'] as $value):?>
        <div class="row">
            <div class="col-3">
                <img width="50px" height="50px" src="./upload/<?php echo $value[1]?>" alt="loi anh">
            </div>
            <div class="col-5">
                <p><?php echo $value[2]?></p>
            </div>
            <div class="col-2">
                <p><?php echo $value[4]?></p>
            </div>
            <div class="col-2">
                <a href="?act=delhd&idhd=<?php echo $i?>">Xóa</a>
            </div>
       
        </div>

        <?php $i++; endforeach;?>
        
        <div class="row">
        <div class="col-8"></div>
            <div class="col-4">
                <button type="submit" class="btn btn-warning"><a href="?act=bill">Mua</a></button>
            </div>
        </div>
<?php endif;?>