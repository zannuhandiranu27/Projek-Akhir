
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TABEL BERITA</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../project/assets/styles.css">
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['status']) != "login") {
        header("location:../login.php");
        }
        
include 'C:\xampp\htdocs\zenius\project\connect.php';
$conn=new mysqli($servername,$user,$pass, $database);

if (!$conn){
   echo "Gagal";
}


$sql = "SELECT * FROM berita JOIN kategori ON kategori.id = berita.kategori_id";

$result = $conn ->query($sql);
?>

<?php
ob_start();
$datas = $conn -> query($sql);
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
                      <a class="nav-link active" aria-current="page" href="dashboard.php">
                            <i class="fa-solid fa-home px-2"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../admins/show.php">
                            <i class="fa-solid fa-user px-2"></i>
                            <span>Data Admin</span>
                        </a>
                    </li>
                   
                   
                
                </li>
               
                
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
  <h3 class="alert alert-info mb-4">Data Berita</h3>
  <div class="card">
      <div class="card-body"> 
  <a href="create.php" class="btn btn-block btn-primary mb-4" style="color:white;">Tambah Berita</a>

          <table id="example" class="table table-striped" style="font-size:15px;">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Id</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th width="250px">Paragraf 1</th>
                      <th width="250px">Paragraf 2</th>
                      <th>Gambar</th>
                  </tr>
              </thead>
              <tbody class="row_position">
                    
              <?php $no=1 ; while($row = $result -> fetch_assoc()){ ?>
                          <tr>
                          
                              <td><?php  echo $no++; ?></td>
                              <td><?php echo $row['id_berita'] ?></td>
                              <td><?php echo $row['judul'] ?></td>
                              <td><?php echo $row['nm_kategori'] ?></td>
                              <td><?php echo substr($row['isi'], 0,100) ?>......</td>
                              <td><?php echo substr($row['isi2'], 0,100) ?>......</td>
                              <td><img src="../assets/<?php echo $row['gambar'] ?>"width="100px" height= "50px" alt="BOLA" style="color: white;">
                              <td>  
                            
                                <a href="edit.php?id=<?php echo $row['id_berita'] ?>" class="btn btn-sm btn-primary" style="color: white; float: right; margin: 10px;width: 100px;" >Edit</a>
                                <a onclick="return confirm(Apakah anda yakin?)" style="float: right; margin: 10px;width: 100px;" href="delete.php?id=<?php echo $row['id_berita'] ?>" class="btn btn-sm btn-danger alert_notif" style="color: white;">Hapus</a>
                            </td>
                              </td>
                          </tr>
                        <?php }?>
              </tbody>
          </table>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script type="text/javascript">
  
          //script datatable
          $(document).ready(function () {
              $("#example").DataTable({});
          });
          //script untuk sorting tabel
          $(".row_position").sortable({
              delay: 150,
              stop: function() {
                  var selectedData = new Array();
                  $('.row_position>tr').each(function() {
                      selectedData.push($(this).attr("id"));
                  });
                  console.log(selectedData);
                  updateOrder(selectedData);
              }
          });  
          
      </script>
</body>
</html>

