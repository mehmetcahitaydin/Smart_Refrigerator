<!--Login.php-->

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
		<form id="form1" name="form1" action="girisisle.php" method="post">
		<div class="row align-content-center justify-content-center " style="margin-left:20px;">
        <div class="col-md-3 kutu">
            <h3 class="text-center">Giriş Ekranı</h3>
            <table class="table">
                <tr>
                    <td>
                        <!-- Kullanıcı adı form gönderildiğinde kaybolmasın diye value ya ekliyoruz-->
                        <input type="text"  name="kuladi" class="form-control" placeholder="Kullanıcı adı">                             
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password"  name="sifre" class="form-control" placeholder="Parola"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox"  name="ckbHatirla"/>
                            Beni hatırla
                        </label>
                        <br>
                        
				<tr>
                    <td class="text-center">
                        <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Giriş"/>
                    </td>
                </tr>
		
	
	</div>	
	
</body>
</html>