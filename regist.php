<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width,intial-scale=1.0">
    <title>BERITA BOLA DAFTAR</title>
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
   
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    include 'C:\xampp\htdocs\zenius\project\connect.php';
    $sql = "INSERT INTO admins (username, password) VALUES ('$username','$password');";
    $datas = $conn->query($sql);

    if (mysqli_affected_rows($conn)>0 ){
        header("Location:login.php");
    }else{
        $_SESSION['error'] = "Menambah data gagal !";
    }
}
?>

<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5"> Create Account </h2>
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
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >SAVE</button>
                           
                        </div> 
                      
                    </form>                   
                </div>      
            </div>
        </div>
    </div>
   
</body>
</html>