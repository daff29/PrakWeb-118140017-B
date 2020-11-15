<?php
	$angka1 = 20;
	$angka2 = 5;
	
	#Operator aritmatika penjumlahan
	$jumlah = $angka1 + $angka2;
	
	//Operator aritmatika pengurangan
	$kurang = $angka1 - $angka2;
	
	/*Operator aritmatika perkalian*/
	$kali = $angka1 * $angka2;
	
	#Operator aritmatika pembagian
	$bagi = $angka1 / $angka2;
	
	/*Operator aritmatika modulus*/
	$mod = $angka1 % $angka2;
	
	//Menampilkan pada browser
	echo "Bilangan 1 = ".$angka1."<br>";
	echo "Bilangan 2 = ".$angka2."<br><br>";
	echo "Berikut merupakan hasil dari setiap operasi<br><br>";
	echo "PENJUMLAHAN<br>";
	echo "Operator : + <br>";
	echo "Hasil : ".$jumlah."<br><br>";
	echo "PENGURANGAN<br>";
	echo "Operator : - <br>";
	echo "Hasil : ".$kurang."<br><br>";
	echo "PERKALIAN<br>";
	echo "Operator : * <br>";
	echo "Hasil : ".$kali."<br><br>";
	echo "PEMBAGIAN<br>";
	echo "Operator : / <br>";
	echo "Hasil : ".$bagi."<br><br>";
	echo "MODULUS<br>";
	echo "Operator : % <br>";
	echo "Hasil : ".$mod."<br><br>";
?>