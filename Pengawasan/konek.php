<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//buat koneksi MySQL untuk user: root, tanpa password, alamat: localhost
$link=mysqli_connect('127.0.0.1','root','','db_pengawasan');
 
//cek apakah koneksi dengan MySQL berhasil
if ($link)
   {
     //koneksi berhasil
     echo "Koneksi dengan MySQL berhasil";
	 echo "";
   }
else
   {
     //koneksi gagal
     echo "Koneksi dengan MySQL gagal";
   }
 
//memeriksa nilai dari $link
echo "<br />";
echo 'hasil var_dump variabel $link : ';
var_dump($link);
?>
</body>
</html>
