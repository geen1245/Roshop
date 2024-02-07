
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
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
            font-size: 43px;
            background-color: #ffffff;
            padding: 20px;
            border: 3px solid #ffffff;
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
            background-color: #0bd9ba;
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
        #backButton {
            background-color: transparent;
            border: none;
            cursor: pointer;
}

        #backButton img {
            width: 35px; /* ปรับขนาดไอคอนตามที่ต้องการ */
}
    </style>
</head>
<body>
    
    <img  src= "img/logo-rag.png">
    </div>
    <h1 >Upload Images</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="file">Choose File:</label>
    <input type="file" name="upload[]" id="file" multiple="multiple">
    
    <label for="name">Name:</label>
    <input type="text" name="name" id="pro_name">

    <input type="submit" name="submit" value="Upload">
</form>
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
