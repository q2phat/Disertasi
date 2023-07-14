<?php
// Tentukan ukuran gambar yang akan diambil
$width = 640;
$height = 480;

// Buat kanvas gambar
$image = imagecreatetruecolor($width, $height);

// Ambil gambar dari kamera
$video = imagecreatefromjpeg('C:\Users\Christopher\Pictures\Camera Roll\WIN_20230628_20_34_15_Pro.jpg'); // Ganti '/dev/video0' dengan alamat perangkat kamera Anda USB\VID_04F2&PID_B6DD&MI_00


// Salin gambar dari kamera ke kanvas
imagecopy($image, $video, 0, 0, 0, 0, $width, $height);

// Simpan gambar ke file
imagejpeg($image, 'hasil.jpg');

// Hapus objek gambar dari memori
imagedestroy($image);
imagedestroy($video);

echo 'Gambar berhasil diambil dan disimpan sebagai hasil.jpg';

?>


<!DOCTYPE html>
<html>
<head>
  <title>Tampilkan Gambar</title>
</head>
<body>
  <h1>Gambar yang Diambil dari Kamera</h1>
  <img src="hasil.jpg" alt="Gambar Hasil" />
</body>
</html>





