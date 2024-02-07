<?php include 'condb.php';
$ids=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
<?php include 'menu1.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                เเสดงข้อมูลการสั่งซื้อ <a style='color:green' >RoShop</a>
                                <div>
                                <br>
                                <a href="report_order.php"><button type="button" class="btn btn-secondary">กลับหน้าหลัก</button></a>
                                </div>
                            <br>
                            <div>
                            <div class="card-body">
                                <h5>เลขที่ใบสั่งซื้อ :<?=$ids?></h5>
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>หร้สสินค้า</th>
                                            <th>ชื่อ</th>
                                            <th>ราคา</th>
                                            <th>จำนวน</th>
                                            <th>ราคารวม</th>
                                        </tr>
                                    </thead>
<?php

$sql ="select * from tb_order t, order_detail d, product p where t.orderID=d.orderID 
and d.pro_id=p.pro_id  and d.orderID='$ids' order by d.pro_id DESC";
$result =mysqli_query($conn,$sql);
$sum_total=0;
while($row=mysqli_fetch_array($result)){
    $sum_total=$row['total_price'];
?>


                                    
                                        <tr>
                                            <td><?=$row['pro_id']?></td>
                                            <td><?=$row['pro_name']?></td>
                                            <td><?=$row['orderPrice']?></td>
                                            <td><?=$row['orderQty']?></td>
                                            <td><?=$row['Total']?></td>
                                        </tr>
                                        <?php 
                                    }
                                    mysqli_close($conn);
                                    ?>
                                    </tbody>
                                </table>
                                <b>รวม<?=number_format($sum_total,2)?>ION</b>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php';?>
            </div>
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
