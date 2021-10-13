<html>
<body>

<?php

$dbname = 'akilli_raf';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$sensor_id = $_GET["sensor_id"];
$gram_agirlik = $_GET["gram_agirlik"]; 


$query = "INSERT INTO sensor_veri (sensor_id, gram_agirlik)
        VALUES ('" . $sensor_id . "', '" . $gram_agirlik . "')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>