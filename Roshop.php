<?php  
    session_start(); 
    if (!isset($_SESSION['is_logged_in'])) {
        header('location: login.php');
    }
?>
<?php require_once 'condb.php';?>
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



.text-center {
    border: 2px solid #263238; /* Add a border around each product */
    background-color: #212121; /* Set a white background color */
}
.text-center img {
    width: 100%; /* Make the image fill the container */
    height: auto; /* Maintain aspect ratio of the image */
}
.mt-1{
  color: #fafafa;
}
.my-1 {
    display:flex; /* Adjust top margin for some elements */
    padding: 1rem;
    justify-content: space-between;
    color: #fafafa;
    font-size: 14px;
}
.products-right{
  font-size: 12px;
}
    </style>
</head>
<body>
<?php include 'menu2.php';?>
</body>
</html>

  <div class="container ">
    <div class="row">
  <?php   
      $sql ="SELECT * FROM product ORDER BY pro_id";
      $rasult= mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_array($rasult)){
  ?>
    <div class="col-md-2 mt-5">
        <div class="text-center">
        <a href="detail.php?id=<?=$row['pro_id']?>"><img src="img/<?=$row['image']?>" width="199px" height="299px " ></a>
      <div class="mt-1">
        ITEM
        <br><?=$row['pro_name']?><br>
        <div class="my-1">
          <div class="products-left">
          <?=$row['price']?> ION
          </div>
          <div class= "products-right">
          จำนวน: <?=$row['amount']?>   
          </div>
        </div>
      </div>
        </div>
    </div>
  <?php
      }
    mysqli_close($conn);
  ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>