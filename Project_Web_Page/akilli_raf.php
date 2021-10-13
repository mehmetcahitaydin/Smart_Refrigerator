
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>SanalPazar.com</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css"/>
	<script type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</script>
</head>
<body>

	<div id="genel">
		<!-- Header -->
		<div id="header">

			<!-- Logo -->
			<div id="logo">
				<a href="index.html"><img src="img/logo.png" alt=""/></a>
			</div>
			<!-- #Logo -->
			
			<!-- Sepet -->
			<div id="sepet">
				<div class="sSol">
					<div class="sepetDetay">
						<span>Sepetinizde <i>0</i> ürün bulunmakta.</span>
						<strong>Toplam Tutar: <i> 0 TL</i></strong>
					</div>
					<a href="" class="kasa">Kasaya Git</a>
				</div>
				<div class="sSag1">
					<a href="#">Giriş Yapıldı</a>
					<a href="#">Mehmet</a>
				</div>
			</div>
		</div>
		<!-- Header -->
		
		<!-- İçerik -->
		<div id="icerik">
			<!-- İçerik Üst -->
			<div id="icerikust">			
				<a href="anasayfa.html"><img src="img/avatar.png" alt=""/></a>
			</div>
			<!-- İçerik Üst -->
			<!-- İçerik Sol -->
			<div id="isol">
				<!-- Sol Menü -->
				<div id="smenu">
					<span class="smb">Mehmet</span>
					<div class="smliste">
					<ul>
						<li><a href="anasayfa.html">Üyelik Bilgilerim</a></li>
						<li><a href="adres.html">Adreslerim</a></li>
						<li><a href="kayitlikart.html">Kayıtlı Kartlarım</a></li>
						<li><a href="akilli_raf.php">Akıllı Rafım</a>
						<li><a href="akilli_siparis.php">Akıllı Sipariş</a>
						<li><a href="ekle_guncelle.php">Akıllı Raf Ürün Ekle/Güncelle</a>
						</li>
						
					</ul>
					</div>
				</div>
				<!-- #Sol Menü -->
				<!--İçerik Sağ -->
			</div>
			<div id="isag">
				<div class='row2'>
					
					<?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'akilli_raf');
				mysqli_query($connection,"SET NAMES UTF8");

                $query = "SELECT sensor_veri.sensor_id,urunler.urun_adi,sensor_veri.gram_agirlik,sensor_veri.tarih
						  FROM sensor_veri,urunler
						  WHERE urunler.urun_id=1
						  ORDER BY sensor_veri.tarih DESC";
                $query_run = mysqli_query($connection, $query);
					?>
                <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col" class="bg-success"> ID</th>
                            <th scope="col" class="bg-primary">Ürün</th>
                            <th scope="col" class="bg-danger">Ağırlık(Gram)</th>
                            <th scope="col" class="bg-primary"> Tarih </th>
                            
                            
                        </tr>
                    </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['sensor_id']; ?> </td>                            
                            <td> <?php echo $row['urun_adi']; ?> </td>                            
                            <td> <?php echo $row['gram_agirlik']; ?> </td>                            
                            <td> <?php echo $row['tarih']; ?> </td>                            
                                                    
                           
                            
                        </tr>
                    </tbody>
            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                </table>
				</div><br></br><br></br><br></br><br></br>
						 
						 
							
  
					
					
					
					
			</div>	
		</div>
		
		
		
		
		
		
		
	</div>
		
</body>