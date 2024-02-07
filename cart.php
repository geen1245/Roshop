<?php  
    session_start(); 
    if (!isset($_SESSION['is_logged_in'])) {
        header('location: login.php');
    }
?>
<?php
 require_once 'condb.php';
?>
<?php include 'menu2.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventory</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
body{
background-image: url('img/rrrrr.png');
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
background-color: rgba(0, 0, 0, 0.8); /* Set a background color with alpha (transparency) value */
background-blend-mode: multiply; /* Adjust blend mode for better color interaction with the background image */  
}
    table {
        width: 100%;
        border-collapse: collapse;
    }

    body tr {
        text-align: center;
        color: #fafafa;
        
    }

    a{
        color: #fafafa;
    }
    table tr:hover{
        background-color:#1C1C1C;
}
</style>
<body>
    <div class="container">
        <form id="form1" method= "POST" action="insert_cart.php">
    <div class ="row">
        <div class ="col-md-12">
        <div class="alert alert-warning" role="alert">
        <img  src= "img/pngtree.png" width="30px" height="28px">Inventory
</div>
<table class ="table table-borderless">
    <tr>
        <td>ชิ้นที่</td>
        <td>สินค้า</td>
        <td>ราคา</td>
        <td>จำนวน</td>
        <td>ราคารวม</td>
        <td>Delete</td>
    </tr>
<?php
$Total=0;
$sumPrice =0;
$m=1;
for($i=0; $i<=(int) $_SESSION["intLine"];$i++){
    if (($_SESSION["strProductID"][$i]) !="") {
        $sql="select * from product where pro_id= '" .$_SESSION["strProductID"][$i] ."' " ;
        $result = mysqli_query($conn, $sql);
        $row_pro=mysqli_fetch_array($result);

        $_SESSION["price"]=$row_pro['price'];
        $Total= $_SESSION["strQty"][$i];
        $sum = $Total* $row_pro['price'];
        $sumPrice = $sumPrice + $sum;
        //$sumPrice = number_format($sumPrice,2);ไม่ได้ใช้
        $_SESSION["sum_price"]= $sumPrice;
?>
    <tr>    
        <td><?=$m?></td>
        <td>
        <img src="img/<?=$row_pro['image']?> "width="154px" height="210px">
        </td>
        <td><?=$row_pro['price']?></td>
        <td><a href="order.php?id=<?=$row_pro['pro_id']?>"><img src="img/b.png"width="30px" height="30px"></a>
        <?php if ($_SESSION["strQty"][$i] >1 ){?>
        <?=$_SESSION["strQty"][$i]?>
        <a href="order_del.php?id=<?=$row_pro['pro_id']?>"><img src="img/d.png" width="30px" height="30px"></a></td>
        <?php 
        } 
        ?>
        <td><?=$sum?></td>
        <td><a href="pro_delete.php?Line=<?=$i?>"> <img src ="img/eee.png" width="45px" height="45px"></td></a>
    </tr>
<?php
$m=$m+1;
}
}
?>
<tr>
<td class="text-end" colspan="6"><img  src= "img/ion-.png" width="30px" height="28px"> <?=$sumPrice?> <a>ION</a></td>
</tr>
</table>
<div style="text-align:right">
<br><a href="Roshop.php"><button type="button" class="btn btn-warning">เพิ่มของใน Inventory</button></a>
<button type="submit" class="btn btn-warning">Bay</button>
</div>
</div>

<div class="row">
    <div class="col-md-4 mx-auto">
    <div class="alert alert-info" role="alert">
        <img  src= "img/logo-rag.png" width="30px" height="28px"> กรอกไอดีเพิ่มส่งของ
</div>
<input type="text"name="cus_name" class="form-control" required placeholder="E-mail...."><br>

<input type="text"name="address" class="form-control" required placeholder="ID...."><br>

<input type="number"name="telephone" class="form-control" required placeholder="Phone...."> <br>
</a>
</div> 
</form>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>