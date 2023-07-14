<?php
if ($_POST['Submit'] == "Registrasi") {
    //menerima nilai dari kiriman form input-user
	 	$nik=$_POST["nik"];
		$nama_l=$_POST["nama_l"];
		$inst=$_POST["inst"];
		$level=$_POST["jab"];
		$user=$_POST["user"];
		$pswd=$_POST["pswd"];
		$kpswd=$_POST["kpswd"];

	
	
	
	
	
	
	
	
	
	//validasi data data kosong
    if (empty($_POST['nik'])||empty($_POST['nama_l'])||empty($_POST['inst'])||empty($_POST['jab'])||empty($_POST['user'])||empty($_POST['pswd'])||empty($_POST['kpswd'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='regis.php';
            </script>
        <?php
    } else {
	
		//buat koneksi MySQL untuk user: root, tanpa password, alamat: localhost
			$link=mysqli_connect('127.0.0.1','root','','db_pengawasan');
	
	//cek nama tidak boleh kosong dan harus text
	
	//cek NIK tidak boleh kosong dan harus angka dan harus 16digit

	//cek instansi tdk boleh kosong 

	// cek pswd tidak boleh kosong

	// cek konfirm pswd tdk boleh kosong dan hasrus sama dgn pswd

	//Query input menginput data kedalam tabel barang
	if ($level=="1") { $jabatan="Pejabat Pembuat Komitmen";}
	else if ($level=="2") { $jabatan="Pejabat Pengadaan";}
	else if ($level=="3") { $jabatan="Penyedia";}
	else if ($level=="4"){ $jabatan="Pengawas";}
	
		
  	$sql="insert into tb_user (nama_lengkap,nik,level_user,instansi,jabatan,user,pswd) values
		('$nama_l','$nik','$level','$inst','$jabatan','$user','$pswd')";

	//Mengeksekusi/menjalankan query diatas	
  	$hasil=mysqli_query($link,$sql);

	//Kondisi apakah berhasil atau tidak
	  if ($hasil) {
		
		?>             
				<script language="JavaScript">
                alert('Registrasi User Berhasil!');
                document.location='login.php';
            </script>
			<?php
		exit;
	  }
	else {
		echo "Gagal Registrasi User";
		exit;
	
	}
}
}
?>