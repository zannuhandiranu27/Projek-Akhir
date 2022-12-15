
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAMBAH BERITA</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../project/assets/styles.css">
</head>
<body>
    
<?php
    session_start();
    if(isset($_SESSION['status']) != "login") {
        header("location:../login.php");
        }
        
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori_id'];
    $isi = $_POST['isi'];
    $isi2 = $_POST['isi2'];
    $gambar = $_POST['gambar'];

    include 'C:\xampp\htdocs\zenius\project\connect.php';
    $sql = "INSERT INTO berita (judul, kategori_id, isi, isi2, gambar) VALUES ('$judul','$kategori','$isi','$isi2','$gambar');";
    $datas = $conn->query($sql);

    if (mysqli_affected_rows($conn)>0 ){
        header("Location:show.php");
    }else{
        $_SESSION['error'] = "Menambah data gagal !";
    }
}
?>

<nav class="navbar navbar-light" style="background-color: #aefff8;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" 
    aria-expanded="false" aria-label="Toggle navigation">
    
    </button>
        
    <div class="container py-2 " >
        
        <a class="navbar-brand " href="#" >
            <img src="../assets/bola.png"width="100px" height= "50px" alt="Bola "><h2 style="color: #1B75BB;">BERITA BOLA 
                        <span style="font-size: 20px; color: black;"></span>
                </h2>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang, admin <?php echo ($_SESSION['username']) ?>
                </a>
            </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    
                    <a class="nav-link active px-4" aria-current="page" href="dashboard.php">Home</a>
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link active px-4" aria-current="page" href="show.php">Tabel</a>
                </li>
              
              
                <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="post-content clearfix" style="font-size:17px;" >  
            <h1 class="h2">Menambah Berita</h1>
          
            <div class="card">
                <div class="cardbody">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" >
                    </div>
                    <div class="mb-3">
                        <label for="kategori_id" class="form-label">kategori_id</label>
                        <input type="text" class="form-control" id="kategori_id" name="kategori_id" placeholder="1-5" >
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Paragraph 1</label>
                        <input type="text" class="form-control" id="isi" name="isi" placeholder="paragraph 1" >
                    </div>
                    <div class="mb-3">
                        <label for="isi2" class="form-label">Paragraph 2</label>
                        <input type="text" class="form-control" id="isi2" name="isi2" placeholder="paragraph 2" >
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="link gambar" >
                    </div>
                    <p style="color:red; font-size: 12px;"><?php if (isset($_SESSION['error'])){ echo($_SESSION['error']); }?> </p>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary" style="width:250px; display: block;margin-right: auto;">save</button>
                    </form>
                </div>
            </div>
    </div>
    <br/>
<br/>

<footer class="bg-primary text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <img src="../assets/bola.png" width="100px" height= "50px" alt="BOLA" style="color: white;">
                        <h2 style="color: white;">BERITA BOLA 
                        <span style="font-size: 20px; color: white;"></span> </h2>
                        <h6 style="color: white;">081485190510
                        <span style="font-size: 10px; color: white;"></span> </h6>
                        <h6 style="color: white;">Jakarta Selatan,Indonesia
                        <span style="font-size: 10px; color: white;"></span> </h6>
                                     
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-1 col-md-3 mb-4 mb-md-0" >
      <a class="nav-link" aria-current="page" href="#">Contact us</a>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-1 col-md-3 mb-2 mb-md-0">
      <a class="nav-link" aria-current="page" href="#">About Us</a>
      </div>

      <div class="col-lg-1 col-md-3 mb-2 mb-md-0">
      <a class="nav-link" aria-current="page" href="#">Docs</a>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: green;">
    © 2020 Copyright:
    <a class="text-white" href="#">2022 BERITA BOLA . All Rights Reserved</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>

