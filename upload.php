้้<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roshop</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
</head>
<style>
body {
    font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('img/ro.jpg'); /* แทนที่ด้วย URL ของรูปภาพที่คุณต้องการใช้ */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
}

h1 {
    text-align: center;
    color: #080808;
    position: absolute;
    top: 20%;
    font-size: 80px;
    padding: 20px;
    border: 3px solid #05f018;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

form {
    max-width: 400px;
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="file"] {
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.success-message {
    text-align: center;
    color: #05f018;
    font-size: 50px;
    margin-top: 20px;
}
#backButton {
  background-color: transparent;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  height: 10%; /* ปรับความสูงของปุ่มให้เท่ากับไอคอน */
}

 #backButton img {
    width: 45px; /* ปรับขนาดไอคอนตามที่ต้องการ */
}
</style>
<body>
<button id="backButton" onclick="goToNewPage()">
    <i class="fas fa-arrow-left"></i>>
    <img src="img/home.png"> 
    </button>

<script>
function goToNewPage() {
  window.location.href = "inedx.php"; // ใส่ URL ของหน้าเป้าหมายที่คุณต้องการนำทางไปที่นั่น
}
</script>  
</body>
</html>
<?php
require_once 'connect.php';
if (isset($_POST['submit'])) {
 //   echo '<pre>';
 //   print_r($_FILES);
 //   echo '</pre>';
    foreach ($_FILES['upload']['name'] as $key => $value) {
        $file_names = $_FILES['upload']['name'];
        $new_name = $file_names[$key];
        
        $sql = "INSERT INTO product (pro_name, detail, type_id, price, amount, image)
                VALUES (:pro_name, :detail, :type_id, :price, :amount, :image)";
                
        $stmt = $conn->prepare($sql);
        
        $params = array(
            'pro_name' => 1,  // เปลี่ยนเป็นค่าที่เหมาะสม
            'detail' => 1,    // เปลี่ยนเป็นค่าที่เหมาะสม
            'type_id' => 1,   // เปลี่ยนเป็นค่าที่เหมาะสม
            'price' => 1,     // เปลี่ยนเป็นค่าที่เหมาะสม
            'amount' => 1,    // เปลี่ยนเป็นค่าที่เหมาะสม
            'image' => $new_name
        );
        
        $stmt->execute($params);
    }
    
    echo '<div class="success-message">success!</div>';
}

?>
