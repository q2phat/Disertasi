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
	 $query ="select * from tb_user";
	 $hasil = mysqli_query($link, $query);
 
	 while($data = mysqli_fetch_array($hasil))
	 {
  echo "<p><tr>";
  echo "<p> No Id : <td>$data[no_id]</td>";
  echo "<p>NIK : <td>$data[nik]</td>";
  echo "<p>Nama Lengkap : <td>$data[nama_lengkap]</td>";
  echo "<p>User : <td>$data[level_user]</td>";
  echo "<p>Insatansi : <td>$data[instansi]</td>";
  echo "<p>Jabatan : <td>$data[jabatan]</td>";
  echo "<p>Password : <td>$data[pswd]</td>";
  echo "</tr>";
}
   }
else
   {
     //koneksi gagal
     echo "Koneksi dengan MySQL gagal";
   }

?>

</body>
</html>
