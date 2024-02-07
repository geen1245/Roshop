<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/#.css">
</head>
<style>

body {
    background-image: url('img/login.png');
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -o-background-size: 100% 100%, auto;
    -moz-background-size: 100% 100%, auto;
    -webkit-background-size: 100% 100%, auto;
    background-size: 100% 100%, auto;
    background-color: rgba(0, 0, 0, 0.0); /* Set a background color with alpha (transparency) value */
    background-blend-mode: multiply; /* Adjust blend mode for better color interaction with the background image */
    font-family: 'Kanit', sans-serif;
}

.flex-login-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0 auto;
    max-width: 100%;
}



/*.login-btn-blue { /*ปุ่มกดlogin
    background-color: #000000; 
}*/

.login-card-custom {
    border-radius: 12px;
    width: 30%;
}


@media (min-width: 0px) and (max-width: 576px) { 
    .login-card-custom {
        width: 100%;
    }
    .flex-login-form {
        width: 80%;
    }
    
}
@media (min-width: 576px) and (max-width: 768px) { 
    .login-card-custom {
        width: 100%;
    }
    .flex-login-form {
        width: 80%;
    }
    
}
@media (min-width: 768px) and (max-width: 992px) { 
    .login-card-custom {
        width: 80%;
    }
    .flex-login-form {
        width: 80%;
    }
    
}
@media (min-width: 992px) and (max-width: 1200px) { 
    .login-card-custom {
        width: 60%;
    }
    .flex-login-form {
        width: 80%;
    }
    
}

.alert-custom {
    width: 30%;
    text-align: center;
}
@media (min-width: 0px) and (max-width: 576px) { 
    .alert-custom {
        width: 100%;
    }
    
}
@media (min-width: 576px) and (max-width: 768px) { 
    .alert-custom {
        width: 100%;
    }
    
}
@media (min-width: 768px) and (max-width: 992px) { 
    .alert-custom {
        width: 80%;
    }
    
}
@media (min-width: 992px) and (max-width: 1200px) { 
    .alert-custom {
        width: 60%;
    }
    
}

.card.login-card-custom {
  margin-right: auto;
  margin-left: 60%;
  height: 90%;
}
.my-1{
    font-size: 11px;
}

.products-right a{
  display: flex;
}

</style>
</div>
<body class="login-background-blue">
    <div class="flex-login-form">

        

        <?php if (isset($_SESSION['err_fill'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['err_fill']; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['err_pw'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['err_pw']; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['err_uname'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['err_uname']; ?>
            </div>
        <?php endif; ?>

        <form class="p-5 card login-card-custom" action="login_db.php" method="post">
        <div class="form-outline mb-3">
            <div class="text-center">
                <img src="img/logo-rag.png">
            </div>
                <h2 class="text-center text-back mb-3 ">ลงชื่อเข้าใช้</h2>
                <label class="form-label" for="form1Example1"></label>
                <input type="text" name="username"  class="form-control"class="form-control "required placeholder="Username" />
            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1"></label>
                <input type="password" name="password"  class="form-control "required placeholder="Password" />
                <div class="text-center"class= "products-right">
                <a  href="https://www.facebook.com/RagnarokClassicGGT/"><img src= "img/fac.png"></a>
                <a  href="Homee.php"> <img  src= "img/Homee.png"></a>
                </div>

            </div>
            

            <button type="submit" name="submit" class="btn login-btn-blue btn-block text-white"><img  src= "img/arrow_right.png" width="94px" height="84px"></button>
            <div class="row">
                <div class="my-1 text-center">
                <b>หากยังไม่ได้เป็นสมาชิก</b>
        </div>
                <a class="btn text-center" href="register.php">สมัครสมาชิก</a></p>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php
    if (isset($_SESSION['err_fill']) || isset($_SESSION['err_pw']) || isset($_SESSION['err_uname'])) {
        unset($_SESSION['err_fill']);
        unset($_SESSION['err_pw']);
        unset($_SESSION['err_uname']);
    }
?>