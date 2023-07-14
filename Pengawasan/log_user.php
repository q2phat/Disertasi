<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>



<div align="center">
  <?php 
echo "Selamat Datang di Aplikasi Pengawasan Perkerasan Jalan"; 

?> 
  <p align="center">
    <?php 
//echo "cek"; echo $_POST['Submit2']; $log=$_POST['Submit2']; echo $log;
//echo $_POST['user1']; echo $_POST['pswd1'];
$us2=$_POST['user1'];  
$ps2=$_POST['pswd1'];
?>
  </p>
  <p align="center">
    <?php
$link=mysqli_connect('127.0.0.1','root','','db_pengawasan');
if ($link)
   {
     //koneksi berhasil
     echo "Koneksi dengan MySQL berhasil";
	 echo "";
	 $query ="SELECT * FROM tb_user WHERE user='$us2'";
	 $hasil = mysqli_query($link, $query);
 	//echo $query;
	//echo $hasil;
	
	 while($data = mysqli_fetch_array($hasil))
	 {
		  echo "<p>=================================";
		  ?>
  </p>
  <p align="center"><font size="3" color="#000066"><strong> Identitas User : </strong></font>
      <?php
		  echo "<p><tr>";
		  echo "<p> No Id : <td>$data[no_id]</td>";
		  echo "<p>NIK : <td>$data[nik]</td>";
		  echo "<p>Nama Lengkap : <td>$data[nama_lengkap]</td>";
			echo "<p>Insatansi : <td>$data[instansi]</td>";
		  echo "<p>Jabatan : <td>$data[jabatan]</td>";
			echo "<p>Nama User : <td>$data[user]</td>";
		  echo "<p>=================================";
		  echo "</tr>";
		  $lvl=$data['level_user'];
		  if ($lvl=="1") 
		  { ?><p align="center"><a href="menu1.php">Lanjut ke Menu Pejabat Pembuat Komitmen</a> </p><?php }
		  else if ($lvl=="2") 
		  { ?><p align="center"><a href="menu2.php">Lanjut ke Menu Pejabat Pengadaan</a> </p><?php }
			else if ($lvl=="3") 
		  { ?><p align="center"><a href="menu3.php">Lanjut ke Menu Penyedia</a> </p><?php }
		  		else if ($lvl=="4") 
		  { ?><p align="center"><a href="menu4.php">Lanjut ke Menu Pengawas</a> </p><?php }
}
   }
else
   {
     //koneksi gagal
     echo "Koneksi dengan MySQL gagal";
   }

?>
  </p>
  
</div>
<p align="center">
</body>
</html>
