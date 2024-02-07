<?php
session_start();
include 'condb.php';
$sql = "select * from tb_order where orderID= '" . $_SESSION["order_id"] . "' ";
$result = mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($result);
$total_price=$rs['total_price']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roshop</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
</head>
<body>
<div class="row">
    <div class="col-md-10 mx-auto">
    <div class="alert alert-info h4 text-center"  role="alert">
    การสั่งซื้อเสร็จสมบูรณ์
</div>
IDORDER <?=$rs['orderID']?> <br>
E-mail <?=$rs['cus_name']?><br>
ID <?=$rs['address']?><br>
Phone <?=$rs['telephone']?><br>
<div class="card">
  <div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>ION</th>
      <th>จำนวน</th>
      <th><img  src= "img/ion-.png" width="30px" height="28px"></th>
    </tr>
  </thead>
  <tbody>
<?php
$sql1 = "select * from order_detail d,product p where d.pro_id=p.pro_id and d.orderID= '" . $_SESSION["order_id"] . "' ";
$rasult1= mysqli_query($conn,$sql1);
while ($row=mysqli_fetch_array($rasult1)){
?>

    <tr>
      <td><?=$row['pro_id']?></td>
      <td><?=$row['pro_name']?></td>
      <td><?=$row['orderPrice']?></td>
      <td><?=$row['orderQty']?></td>
      <td><?=$row['Total']?></td>
    </tr>
  </tbody>
<?php
}
?>
</table>
<h6 class="text-end"><img  src= "img/ion-.png" width="30px" height="28px" ><?=number_format($total_price,2)?> ION </h6>
</div>
  </div>
  <div class="text-center">
<br><a href="Roshop.php"><button type="button" class="btn btn-warning">Back</button></a>
<a href="Homee.php"><button type="button" class="btn btn-warning">HOME</button></a>
</div>
  <br><img  src= "img/qrcod.png" width="150px" height="150px" > ***โอนเงิน เงินภายใน 5 นาที!
    </div>
  </div>
</div>
</body>
</html>