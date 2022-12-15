<?php
	$content = "
	<html> 
	<body>
	
	</body>
	</html>
	";

	require_once "../project/mpdf_v8.0.3-master/vendor/autoload.php";
    
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($content);
	$mpdf->Output();
?>

<?php
    $id_berita = $_GET['id_berita']; 
    include 'connect.php';
    $no = 1;
    $query = mysqli_query($conn, "SELECT * FROM berita JOIN kategori ON berita.kategori_id = kategori.id WHERE id_berita = '$id_berita'");
    $data = mysqli_fetch_array($query);
    ?>
<!DOCTYPE html>
<html>
  <div class="post-content clearfix" style="font-size:17px;" >  
   <div class="row row-cols-1 row-cols g-2 p-5 ">  
    <div class="span12 well">  
     <img class="img-polaroid" src="../project/assets/<?php echo $data['gambar']?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>  
     <div class="content-heading"><h3> <?php echo $data['judul']?></h3></div>  
      <h5> <?php echo $data['nm_kategori']?></h5>
     <p style="text-align:justify;text-indent: 45px;"><?php echo $data['isi']?></p>  
     <div style="clear:both;text-align:justify"><?php echo $data['isi2']?></div>  
    </div>  
   </div>  
</div>  
</body>
</html>
<?php 

	//Meload library mPDF
	require 'vendor/autoload.php';

	//Membuat inisialisasi objek mPDF
	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4','margin_top' => 25, 'margin_bottom' => 25, 'margin_left' => 25, 'margin_right' => 25]);

	//Memasukkan output yang diambil dari output buffering ke variabel html
	$html = ob_get_contents();

	//Menghapus isi output buffering
	ob_end_clean();

	$mpdf->WriteHTML(utf8_encode($html));

	//Membuat output file
	$content = $mpdf->Output("CETAK.pdf", "D");

?>