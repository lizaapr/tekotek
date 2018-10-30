<!DOCTYPE html>
<html>
<head>
	<title>tekotek</title>
</head>
<body>
	<?php
	echo "<span style='font-family=Helvetica'> Tekotek-kotek anak ayam turun 100 </span>" ;
	echo "<br>";

	for ($i=99; $i>=1; $i--){
		if($i%2==0){
			echo"<span style='color:brown';'font-family=Helvetica'> Mati satu tinggal $i</span>";
		}else{
			echo"<span style='color:orange; 'font-family=Helvetivca'>Mati satu tinggal $i</span>";
		}
		echo "<br>";
	}
	?>
</body>
</html>