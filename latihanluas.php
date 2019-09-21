<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Luas Bangun Ruang</title>
	<link rel="icon"type="image/png"href="image/latihan1">
</head>
<body bgcolor="pink">
	<h3>Belajar Menghitung Luas Bangun Ruang</h3>
</body>
</html>


<?php
$p = 10;
$l = 30;
$r = 20;
$π = 3.14;
$a = 12;
$t = 40;

echo "Rumus Menghitung Luas Persegi Panjang adalah = Panjang x Lebar ";
echo "<br>";
echo " Panjang = ". $p;
echo "<br>";
echo "Lebar = ". $l;
echo "<br>";
echo "Luas Persegi Panjang adalah = ". $p * $l;
echo "<br>";
echo "<br>";


echo "Rumus Menghitung Luas Segitiga adalah = 1/2 x Alas x Tinggi ";
echo "<br>";
echo " Alas = ". $a;
echo "<br>";
echo "Tinggi = ". $t;
echo "<br>";
echo "Luas Segitiga adalah = ". 1/2 * $a * $t;
echo "<br>";
echo "<br>";


echo "Rumus Menghitung Luas Lingkaran adalah = π x r x r  ";
echo "<br>";
echo " π = ". $π ;
echo "<br>";
echo "jari-jari = ". $r;
echo "<br>";
echo "Luas Lingkaran adalah = ". $π * $r * $r;
echo "<br>";
echo "<br>";

echo "Rumus Menghitung Luas Jajar Genjang adalah = Alas x Tinggi  ";
echo "<br>";
echo " Alas = ". $a;
echo "<br>";
echo "Tinggi = ". $r;
echo "<br>";
echo "Luas Jajar Genjang adalah = ". $a * $t;
echo "<br>";
echo "<br>";

?>

