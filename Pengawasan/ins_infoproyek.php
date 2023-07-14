<?php
if ($_POST['Submit'] == "INPUT") {
    //menerima nilai dari kiriman form input-user
		$nokontrak=$_POST["nokontrak"]; 	
		$nmpaket=$_POST["nmpaket"];
		$nmsatker=$_POST["nmsatker"];
		$nmppk=$_POST["nmppk"];
		$nilaikontrak=$_POST["nilaikontrak"];
		$lokasi=$_POST["lokasi"];
		$tanggal=$_POST["tanggal"];
		$pelaksanaan=$_POST["pelaksanaan"];
		$tglpho=$_POST["tglpho"];

	//validasi data data kosong
    if (empty($_POST['nokontrak'])||empty($_POST['nmpaket'])||empty($_POST['nmsatker'])||empty($_POST['nmppk'])||empty($_POST['nilaikontrak'])||empty($_POST['lokasi'])||empty($_POST['tanggal'])||empty($_POST['pelaksanaan'])||empty($_POST['tglpho'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='regis.php';
            </script>
        <?php
    } else {
	
		//buat koneksi MySQL untuk user: root, tanpa password, alamat: localhost
			$link=mysqli_connect('127.0.0.1','root','','db_Pengawasan');
	


	//diganti nama tabel!!! diganti nama variabel diatas
  	$sql="insert into tb_infoproyek (no_kontrak,nm_paket,nm_satker,nm_ppk,nil_kontrak,lokasi,tgl_kontrak,wkt_plksn,tgl_pho) values
		('$nokontrak','$nmpaket','$nmsatker','$nmppk','$nilaikontrak','$lokasi','$tanggal','$pelaksanaan','$tglpho')";

	//Mengeksekusi/menjalankan query diatas	
  	$hasil=mysqli_query($link,$sql);

	//Kondisi apakah berhasil atau tidak
	  if ($hasil) {
		
		?>             
				<script language="JavaScript">
                alert('Pengisian Info Proyek Berhasil!');
                document.location='login.php';
            </script>
			<?php
		exit;
	  }
	else {
		echo "Gagal Input Info Proyek";
		exit;
	
	}
}
}
?>