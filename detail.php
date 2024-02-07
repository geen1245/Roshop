<?php  
    session_start(); 
    if (!isset($_SESSION['is_logged_in'])) {
        header('location: login.php');
    }
?>
<?php require_once 'condb.php';?>
<?php include 'menu2.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Roshop</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet " />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
background-color: rgba(0, 0, 0, 0.0); /* Set a background color with alpha (transparency) value */
background-blend-mode: multiply; /* Adjust blend mode for better color interaction with the background image */
}
* {
margin:0;
padding: 0;
box-sizing: border-box;
}
.grid-con{
  background-color: rgba(0, 0, 0, 0.9);
  display:grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(3, 300px);
  border-bottom: 1px solid #808080;
}
.grid-item1{
grid-column: 1/3;
grid-row: 1/2;
}
.grid-item1 b{
grid-column: 1/2;
grid-row: 1/3;
}
.grid-item-box{
border-bottom: 1px solid #808080;
}
.grid-item-box  img{
margin: 0 12px;
}
.grid-item-box  h{
margin: 0 12px;
}
.grid-item2{
  grid-column: 3/3;
  font-size: 18px;
  border-bottom: 1px solid #808080;
  width: 360px;
  height: 260px;
}

.grid-item2 a {
  display: flex;
  justify-content: flex-end;
}
.grid-item3{
  grid-column: 3/4;
  border: 1px solid #808080;
  border-radius: 6px;
  width: 360px;
  height: 190px;
}
.grid-item3 h {
  border-bottom: 1px solid #808080;
}
.grid-item-info{
  color: #fafafa;
}


    </style>
        <?php
    $ids=$_GET['id'];
    $sql ="SELECT * FROM product, type WHERE product.type_id= type.type_id and product.pro_id='$ids'  ";
    $rasult= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rasult);
    ?>

<body>
    <div class="grid-con p-5">
      <div class="grid-item1">
          <img src="img/<?=$row['image']?>" width="482px" height="584px" />
          <div class="grid-item-info p-3">
            <div >
            <b>Activities</b> <img src="img/sm.png">  <th>Ragnarok : Classic</th>
              <div class="grid-item-box mt-3">
                <p><img src="img/Unlisted.png"> Stockpile <img src="img/<?=$row['image']?>" width="57px" height="73px"><?=$row['pro_name']?> <h>จำนวน <?=$row['amount']?><h></p>
              
              </div>
            </div>
          </div>
      </div>
      <div class="grid-item2">
            <a href="Roshop.php"><img src="img/eee.png"></a>
          <div class="grid-item-info p-3">
            <div>
            <img src="img/sm.png"> <th>Ragnarok : Classic</th>
            <h1><?=$row['pro_name']?></h1>
            </div>
          </div>
      </div>
      <div class="grid-item3 mt-2">
            <div class="grid-item-info p-3">
              <div>
              <h>FIXED PRICE ION</h>
              <p class="mt-3"><img  src= "img/ionn.png" width="42px" height="42px"> <?=$row['price']?></p>
                <div class="text-center" >
              <a class="btn btn-warning"  href="order.php?id=<?=$row['pro_id']?>" ><img src="img/gg.png" width="18" height="18"> ADD INVENTORY </a>
                </div>
              </div>
            </dvi>
      </div>
    </div>


  <?php
    mysqli_close($conn);
    ?>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>