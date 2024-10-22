<div class="container">
    <div><br></div>
<button  type="submit" name="btnsub" class="btn btn-warning"><a style="text-decoration: none;"  href="?act=lichsudonhang"><strong style="color: white;">Quay về</strong></a></button>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Tên</th>
      <th scope="col">Số Lượng</th>
      <th scope="col">Giá</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($dh as $value):?>
    <tr>
      <th scope="row"><?php echo $value['id']?></th>
      <td>
        <img width="130px" src="./upload/<?php echo $value['img']?>" alt="">
      </td>
      <td><?php echo $value['name']?></td>
      <td><?php echo $value['soluong']?></td>
      <td><?php echo number_format($value['price'])?> VND</td>
    </tr>
    <?php endforeach;?>
  
  </tbody>
</table>
    </div>
</div>