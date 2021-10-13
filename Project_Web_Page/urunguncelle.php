
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css1/style.css"/>
	<title>SanalPazar.com</title>
    
</head>
<body>

	<div id="login">
		<!-- Logo -->
			<div id="logo1">
				<a href="login.php"><img src="img/logo.png" alt=""/></a>
			</div>
		<!-- #Logo -->
		<div class="eklendiLogo" style="margin-left: 630px;padding-top: 100px;"><a href="ekle_guncelle.php"><img src="img/eklendi_simge.png" alt=""/></a></div>
		<div class="eklendi" style="margin-left: 620px;
									width:150px; height:50px; margin-top:10px; margin-right:580px;";>
								
		<?php
		$baglan=mysqli_connect("localhost","root","","akilli_raf");
		mysqli_query($baglan,"SET NAMES UTF8");
		$guncelurun = $_POST["guncelurun"];
		$sql = "UPDATE urunler SET urun_adi = '$guncelurun' WHERE urun_id= 1";

		if (mysqli_query($baglan, $sql)) {
		  echo "Ürün Başarıyla Güncellendi";
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($baglan);
		}

		mysqli_close($baglan);
		?>
		</div>
	
	</div>	
	
		
	
</body>
</html>