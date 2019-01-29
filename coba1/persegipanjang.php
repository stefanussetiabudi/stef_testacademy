<?php
?>

<form action="" method="get">
	panjang<input type="number" name="p"></br>
	lebar<input type="number" name="l"></br>
	<input type="submit" name="go"></br>
	<?php
		if (isset($_GET['go'])) {
			$p = $_GET['p'];
			$l = $_GET['l'];
			if (cekGanjil($p)&& cekGanjil($l)) {
				persegi($p,$l);
			}else {
				echo "Kedua Bilangan harus ganjil";
			}
		}
		function persegi($p,$l){
			for ($i=1; $i<= $l; $i++) { 
				for ($a=1; $a <=$p; $a++) { 
					if ($i == 1 || $l && $i !=middle($l)) {
						echo "*";
					} else {
						if ($a == middle($p) || $a ==1 || $a == $p ){
							echo "*";
						}
						else if ($i == middle($l)) {
							echo "*";
						} else {
							echo "&nbsp&nbsp";
						}
					}
				}
				echo "</br>";
			}
		}
	function middle($a){
		return($a + 1)/2;
	}
	function cekGanjil($b) {
		if ($b % 2 == 1) 
			return true;

		}
	
	