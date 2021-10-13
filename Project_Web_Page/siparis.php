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
		<div class="eklendiLogo" style="margin-left: 630px;padding-top: 100px;"><a href="akilli_siparis.php"><img src="img/eklendi_simge.png" alt=""/></a></div>
			<div class="eklendi" style="margin-left: 600px; width:200px; height:50px; margin-top:10px; margin-right:570px;">
									
										
				<?php
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection, 'akilli_raf');
				mysqli_query($connection,"SET NAMES UTF8");
				$sinir = $_POST["sinirdeger"];	
				$siparis = $_POST["siparismiktar"];
				
				/*echo $siparis;*/
				
				$query = "SELECT sensor_veri.gram_agirlik
							FROM sensor_veri
							WHERE sensor_veri.gram_agirlik<'$sinir'  LIMIT 1";
				$query_run = mysqli_query($connection, $query);
				 if($query_run)
                {
                    foreach($query_run as $row)
                    { echo "Akıllı Sipariş Başarıyla Kaydedildi";			/*$row['gram_agirlik'];*/
					}
				}	
                else 
                {
                    echo "No Record Found";
                }
				
				$to = "cahittaydinn@gmail.com";
				$subject = "Akıllı Raf";
				$txt = "Merhaba Mehmet,
				Akıllı Rafınızda Kalan Domates Miktarı $sinir gramın Altına Düşmüştür!!!";


				mail($to,$subject,$txt);
				
				$to1 = "cahittaydinn@gmail.com";
				$subject1 = "Siparişiniz Alınmıştır ✓ ";
				$txt1 = "Merhaba Mehmet,
				288086054 Numaralı Siparişini Aldık.
				Siparis Detayı:
				$siparis Gram Domates 
				Alışverişte Bizi Tercih Ettiğiniz için Teşekkür Ederiz";
				
				mail($to1,$subject1,$txt1);
				?>
		</div>
	
	</div>	
	
		
	
</body>
</html>

