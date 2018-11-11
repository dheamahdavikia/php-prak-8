<html>
<head>

	<title>penyisipan variabel pada HTML</title>
</head>
<body>
	<?php
		//Berikut adalah inisiasisasi beberapa variabel
		$warna1="merah";
		$warna2="hijau";
		$warna3="kuning";
		?>
		<b>dibawah ini adalah warna kesukaanku:<br>
		<?php
			echo "$warna1, $warna2, dan $warna3</b>";
			?>
	</body>
	</html>