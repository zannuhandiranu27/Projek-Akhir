<?php
        include 'connect.php';
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
            <img src="../project/assets/bola.png" width="100px" height= "50px" alt="Bola "><h2 style="color: #1B75BB;">BERITA BOLA 
                        <span style="font-size: 20px; color: black;"></span>
                </h2>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    
                    <a class="nav-link active px-4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    
                    <a class="nav-link active px-4" aria-current="page" href="login.php">Login</a>
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


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner" style="background-color: white;">
        <div class="carousel-item active">
            <div class="carousel-wrapper d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <h1 class="carousel-tittle">Argentina vs Australia</h1>
                            <h3 class="carousel-subtiltte">16 besar Piala dunia 2022</h3>
                            <p>Argentina vs Australia di babak 16 besar Piala dunia 2022</p>
                            <a class="btn btn-success" href="#"  style="width:250px; display: block;margin-right: auto;">Detail Berita</a>
                        </div>

                        <div class="col-4">    
                            <div class="m-auto" style="width: 200px; height: 200px; ">
                            <img src="https://cdn.antaranews.com/cache/800x533/2022/12/03/Argentina-vs-australia.jpg" class="card-img-top" alt="Skyscrapers" />
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        <div class="carousel-item">
            <div class="carousel-wrapper d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                        <h1 class="carousel-tittle">Belanda vs Amerika Serikat</h1>
                            <h3 class="carousel-subtiltte">16 besar Piala dunia 2022</h3>
                            <p>Argentina vs Australia di babak 16 besar Piala dunia 2022</p>
                            <a class="btn btn-success" href="#"  style="width:250px; display: block;margin-right: auto;">Detail Berita</a>
                        </div>
                        <div class="col-4">
                            <div class="m-auto" style="width: 200px; height: 200px;">
                            <img src="https://cdn.antaranews.com/cache/730x487/2022/12/03/belanda-vs-AS.jpg" class="card-img-top" alt="bld-as" />
                             </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-wrapper d-flex align-items-center">
                <div class="container">
                    <div class="row">
                    <div class="col-8">
                    <h1 class="carousel-tittle">Jepang vs Kroasia</h1>
                            <h3 class="carousel-subtiltte">16 besar Piala dunia 2022</h3>
                            <p>Argentina vs Australia di babak 16 besar Piala dunia 2022</p>
                            <a class="btn btn-success" href="#"  style="width:250px; display: block;margin-right: auto;">Detail Berita</a>
                        </div> 
                        <div class="col-4">
                            <div class="m-auto" style="width: 200px; height: 200px; ">
                            <img src="https://img.antaranews.com/cache/800x533/2022/12/05/Jepang-vs-Kroasia.jpg" class="card-img-top" alt="Skyscrapers" />
                        </div>                          
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <h6 style="color: blue;"> ⇚Previous</h6>
            <span class="visually"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <h6 style="color: blue;">next⇛</h6>
            <span class="visually "></span>
           
        </button>
        </div>

     
<div class="row row-cols-1 row-cols-md-3 g-2 p-5 " style="background-color: #e3f2fd;">
  <div class="col">
    <div class="card h-100" style="width:500px; float: left; margin: 5px;">
      <img src="https://img.antaranews.com/cache/800x533/2022/12/04/inggris-vs-Senegal.jpg.webp" class="card-img-top"
        alt="Skyscrapers" />
      <div class="card-body">
        <h3 class="card-title">Inggris vs Senegal</h3>
        <h5> 16 besar Piala dunia 2022</h5>
        <p class="card-text ">
        Ada statistik yang bisa menjadi pemicu tapi juga kendala yang harus diperhatikan Senegal kala menghadapi Inggris bahwa tim-tim Afrika tak pernah menang dari total 21 pertemuan dengan Three Lions........
        </p>
      </div>
      <div class="card-footer">
      <a class="btn btn-success" href="#"  style="width:250px; display: block;margin-left: auto;margin-right: auto;">Detail Berita</a>
      </div>
    </div>
  </div>

<div class="col">
    <div class="card h-100" style="width:500px; display: block;margin-left: auto;margin-right: auto;">
      <img src="https://cdn.antaranews.com/cache/800x533/2022/12/05/brazil-vs-korsel.jpg" class="card-img-top"
        alt="Los Angeles Skyscrapers" />
      <div class="card-body">
        <h3 class="card-title">Brazil vs Korea Selatan</h3>
        <h5> 16 besar Piala dunia 2022</h5>
        <p class="card-text">Pelatih brazil tite rupanya dipusingkan oleh masalah cedera para pemainnya termasuk yang reguler menjadi stater.
        Pelatih brazil tite rupanya dipusingkan oleh masalah cedera para pemainnya termasuk yang reguler menjadi stater. tite tidak memperbolehkan media menghadiri sesi latihan
        brazil......      
      </p>
    </div>
        <div class="card-footer">
            <a class="btn btn-success" href="detail_berita.php"  style="width:250px; display: block;margin-left: auto;margin-right: auto;">Detail Berita</a>
        </div>
    </div>
</div>


  <div class="col">
    <div class="card h-100" style="width:500px; float: right; margin: 5px;">
      <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/12/04/3421326263.jpg" class="card-img-top"
        alt="Palm Springs Road" />
      <div class="card-body">
        <h3 class="card-title">France vs Poland</h3>
        <h5> 16 besar Piala dunia 2022</h5>
        <p class="card-text" >

France lolos ke babak 16 setelah berhasil menjadi juara di klasemen fase Grup D, sedangkan Poland menjadi Runner Up di klasemen Fase Grup C.......
        </p>
      </div>
      <div class="card-footer">
      <a class="btn btn-success" href="#"  style="width:250px; display: block;margin-left: auto;margin-right: auto;">Detail Berita</a>
      </div>
    </div>
  </div>
</div>
        
        
<footer class="bg-primary text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <img src="../project/assets/bola.png"  width="100px" height= "50px" alt="BOLA" style="color: white;">
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

