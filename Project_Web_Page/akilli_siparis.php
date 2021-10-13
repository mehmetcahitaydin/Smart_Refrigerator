<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>SanalPazar.com</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script type="text/javascript">

	

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
				<div class="sSag">
					<a href="anasayfa.html"></a>
					<a href="#"></a>
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
			</div>	
				<!-- #Sol Menü -->
				
				<!--İçerik Sağ -->
			<div id="isag">
					<div class='row4' style="margin-left:50px;">
					
					<?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'akilli_raf');
				mysqli_query($connection,"SET NAMES UTF8");

                $query = "SELECT urunler.urun_adi
							FROM urunler
							WHERE urunler.urun_id=1";
                $query_run = mysqli_query($connection, $query);
					?>
                <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>                            
                            <th scope="col" class="bg-success">Akıllı Rafta Bulunan Ürün</th>                                                                                   
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
                                                      
                            <td style="color:Tomato"> <?php echo $row['urun_adi']; ?> </td>                                                                                                                                                                                                               
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
					</div><br></br>
					<div class='row5'>
						<form action="siparis.php" method="POST">
						  
							<div class="form-group" style="padding-left:50px;">
							  <label>Sınır Değeri Giriniz</label>
							  <input type="text" name="sinirdeger" class="form-control" placeholder="Gram/mL.">
							</div>
							<div class="form-group" style="padding-left:50px;">
							  <label>Sipariş Edilecek Miktarı Giriniz</label>
							  <input type="text" name="siparismiktar" class="form-control" placeholder="Gram/mL.">
							</div>
							<div class="form-group" style="padding-left:50px;">
							  <div class="form-check">
								<input class="form-check-input" type="checkbox" id="Check" >
								<label class="form-check-label">
								  Seçimi Onaylıyorum
								</label>
							  </div>
							</div>
							<button type="submit" style="margin-left:50px; width:690px;" class="btn btn-primary btn-lg btn-block" >Akıllı Siparişi Oluştur</button>
						  
						</form>
					</div> <br></br><br></br><br></br><br></br>
			</div>
		
		
		
		
		
		
		
		
		
		
		
		</div>	
	</div>	
</body>
