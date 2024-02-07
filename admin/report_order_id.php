<?php include "condb.php";?>
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
                                เเสดงข้อมูลการสั่งซื้อRO <a style='color:green' >username</a>
                                <div>
                                <br>
                                <a href="report_order_yes.php"><button type="button" class="btn btn-secondary">ชำระเงินเเล้ว</button></a>
                                <a href="report_order.php"><button type="button" class="btn btn-secondary">ยังไม่ชำระเงิน</button></a>
                                <a href="report_order_no.php"><button type="button" class="btn btn-secondary">ยกเลิกการสั่ง</button></a>
                                <a href="report_order_id.php"><button type="button" class="btn btn-secondary">username</button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>user_id</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
// Your SQL query with placeholders
$sql ="SELECT * FROM users ORDER BY user_id";
$rasult= mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($rasult)){
?>


                                    
                                        <tr>
                                            <td><?=$row['user_id']?></td>
                                            <td><?=$row['username']?></td>
                                            <td><?=$row['password']?></td>
                                            <td><?=$row['role']?></td>

                                        </tr>
                                        <?php
      }
    mysqli_close($conn);
  ?>
                                    </tbody>
                                </table>
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

