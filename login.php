<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width,intial-scale=1.0">
    <title>BERITA BOLA LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css"
    integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfhoZ6vm6E9GK20rF6DSJSpIbRbi+Nn0WDPID907xB2Q==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/admin.css">
</head>
<body>

<?php
    session_start();
    // if(issets($_SESSION["status"]))
    include 'C:\xampp\htdocs\zenius\project\connect.php';
    
    if(isset($_SESSION["status"]) && $_SESSION["status"] === "login" ) {
        header("location:../project/admin/dashboard.php");
    }
    

    if(isset($_POST['username']) && $_POST['password']){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admins WHERE username= '$username' and password='$password'";
        $data = $conn->query($sql);

        $check = mysqli_num_rows($data);

    if(isset($_POST['submit'])){
        if($check > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:../project/admin/dashboard.php");
            die();
        }else{
            $_SESSION['error'] = "Gagal login,silahkan cek kembali username dan password anda!";
        }
    }
    }
?>

<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5"> Login Form </h2>
                <div class="text-center mb-5 text-dark"> BERITA BOLA</div>
                <div class="card my-5">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="card-body cardbody-color p-lg-5">
                    <div class="text-center">
                        <img src="../project/assets/bola.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" height= "150px" alt="profile">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp"
                        require
                            placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" 
                        require>
                    </div>
                    <p style="color:red; font-size: 12px;"><?php if(isset($_SESSION['error'])){ echo($_SESSION['error']);} ?>
                    </p>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >Login</button>
                           
                        </div> 
                        <div id="emailHelp" class="form-text text-center mb-4 text-dark">
                            Not Registered?
                            <a href="regist.php" class="text-dark fw-bold"> create an account </a>
                            <br><br>
                            <a href="index.php" class="text-dark fw-bold"> Back to home </a>
                        </div>
                    </form>                   
                </div>      
            </div>
        </div>
    </div>
   
</body>
</html>