<!-- <html>
<head>
<title>.:: Contoh Seleksi Kondisi
::.</title>
</head>
<body>
<font face=verdana size=2>
<?php
if (empty ($nilai=$_POST['nilai']));
echo "Nilai Ujian anda : $nilai<br>";
if ($nilai>70)
{
 echo "Anda Kompeten<br>";

}
else {
echo "Tidak memenuhi syarat";
}
?>
</body>
</html> -->


<html>
<head>
<title>.:: Contoh Seleksi Kondisi ::.</title>
</head>
<body>
<font face=verdana size=2>
<?php
if(empty($_POST['nilai']));
echo "Nilai Ujian anda : $nilai<br>";
if ($nilai<50)
{
echo "Anda Tidak Lulus<br>";
}
elseif ($nilai<70)
{
echo "Anda Lulus Tapi Tidak Kompeten<br>";
}
else
{
echo "Selamat Anda Lulus dan
Kompeten";
}
?>
</body>
</html>