<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>SanalPazar.com</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css1/style.css"/>
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
					<a href="anasayfa.html">Giriş Yapıldı</a>
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
			</div>	
				<!-- #Sol Menü -->
				
				<!--İçerik Sağ -->
				<div id="isag">
					<div class="urunekle" style="margin-left:50px;">
						<h3 style="color:Tomato">Akıllı Raf Ürün Ekle</h3><br></br>
						<form action="ekle.php" method="POST">
							<div class="input-group mb-3">
							<select class="custom-select" name="urun_adi">
								<option selected>Seçiniz</option>
								<option value="Domates">Domates</option>
								<option value="Yumurta">Yumurta</option>
								<option value="Süt">Süt</option>
								<option value="Peynir">Peynir</option>
								<option value="Su">Su</option>
								<option value="Yoğurt">Yoğurt</option>
								
							</select><div class="input-group-append">
							<label class="input-group-text" for="inputGroupSelect02">Ürünler</label>
									</div><br></br>
						  </div>
							<button type="submit" class="btn btn-primary btn-lg btn-block">Akıllı Rafa Ekle</button>
						</form>
				
				
					</div>
					<div class="urunguncelle" style="margin-left:50px;"><br></br><br></br><br></br><br></br>
						<h3 style="color:Tomato">Akıllı Raf Ürün Güncelle</h3><br></br>
						<form action="urunguncelle.php" method="POST">
						  <div class="input-group mb-3">
						  <select class="custom-select" name="guncelurun">
								<option name="Domates">Domates</option>
								<option name="Yumurta">Yumurta</option>
								<option name="Süt">Süt</option>
								<option name="Peynir">Peynir</option>
								<option name="Su">Su</option>
								<option name="Yoğurt">Yoğurt</option>
						  </select>
						  <div class="input-group-append">
							<label class="input-group-text" for="inputGroupSelect02">Ürünler</label>
						  </div>
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block">Akıllı Raf Güncelle</button>
						</form>
						
					
					
					</div><br></br><br></br><br></br><br></br>
				</div>
		
		
		
		
		
		
		
		
		
		
		
		</div>	
	</div>	
</body>