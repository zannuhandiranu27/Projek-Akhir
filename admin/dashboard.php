<?php
    session_start();
    if(!isset($_SESSION["status"])) {
        header("location: ../login.php");
    }

?>

<?php
        include '../connect.php';
    $sql = "SELECT * FROM berita 
        JOIN kategori ON berita.kategori_id = kategori.id";

        $datas = $conn->query($sql);

        $kategori_id = "";
        $judul = "";
        $isi = "";
        $isi2 = "";
        $gambar = "";
        if (isset($_GET['submit'])) {
          $kategori_id = $_GET['kategori_id'];
          $judul = $_GET['judul'];
          $isi = $_GET['isi'];
          $isi2 = $_GET['isi2'];
          $gambar = $_GET['gambar'];
          $id_berita    =$_GET['id_berita'];
        }
    ?>
    

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BERITA BOLA</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../project/assets/styles.css">
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #aefff8;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" 
    aria-expanded="false" aria-label="Toggle navigation">
    
      
    </button>
        
    <div class="container py-2 " >
        
        <a class="navbar-brand " href="#" >
            <img src="../assets/bola.png" width="100px" height= "50px" alt="Bola "><h2 style="color: #1B75BB;">BERITA BOLA 
                        <span style="font-size: 20px; color: black;"></span>
                </h2>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat Datang,<?php echo ($_SESSION['username']) ?>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="../logout.php"> Logout</a>
                    </li>
                </ul>
            </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    
                    <a class="nav-link active px-4" aria-current="page" href="show.php">Data</a>
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link active px-4" aria-current="page" href="create.php">Create</a>
                </li>
              
              
        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div id="carouseltop" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
  
     <?php $i=0; foreach($datas as $data):?>
        <div class="carousel-item <?php $i++; if($i==1){echo"active";} ?>">
            <div class="row bg-white">
                <div class="col-md">
                    <div class="row">
                        <div class="col-md-8">
                            <h1><?php echo $data ['judul']; ?></h1>
                            <h3><?php echo $data ['nm_kategori']; ?></h3>
                            <p><?php echo substr($data['isi'], 0, 150)?>.....</p>
                            <a class="btn btn-success" href="../detail_berita.php?id_berita=<?=$data['id_berita']?> "  style="width:250px; display: block;margin-right: auto;">Detail Berita</a>

                        </div>
                        <div class="col-md-4">
                            
                            <img class="img-fluid" src="../assets/<?php echo $data ['gambar']; ?>" alt="gambar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
    </div>
   
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouseltop" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <h6 style="color: blue;"> ⇚Previous</h6>
        <span class="visually"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouseltop" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <h6 style="color: blue;">next⇛</h6>
        <span class="visually"></span>
    </button>
</div>


<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-2 p-5" >  

        <?php
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM berita JOIN kategori ON berita.kategori_id = kategori.id LIMIT 3');
        while ($data = mysqli_fetch_array($query)) {
        ?>
    
        <div class="col" >

        <div class="card p-2" style="width: 18rem; background-color: #e3f2fd; width:300px">
            <img class="card-img-top" src="../assets/<?php echo $data ['gambar']; ?>" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title"><?php echo $data['judul']?></h3>
                <h5> <?php echo $data ['nm_kategori']; ?></h5>
                <p class="card-text"><?php echo substr($data['isi'], 0, 150)?> ....</p>
                <a class="btn btn-success" style="width:250px; display: block;margin-left: auto;margin-right: auto;" href="../detail_berita.php?id_berita=<?=$data['id_berita']?> ">Detail Berita</a>
            </div>
        </div>

        </div>
    
   
  <?php } ?>
  </div>
</div>

<footer class="bg-primary text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <img src="../assets/bola.png"  width="100px" height= "50px" alt="BOLA" style="color: white;">
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
</div>
</body>
</html>
