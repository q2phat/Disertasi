<?php
if ($_POST['Submit'] == "INPUT") {
    //menerima nilai dari kiriman form input-user
		$noitem=$_POST["noitem"]; 	
		$uraian=$_POST["uraian"];
		$satuan=$_POST["satuan"];
		$kuantitas=$_POST["kuantitas"];
		$ket=$_POST["ket"];


	//validasi data data kosong
    if (empty($_POST['noitem'])||empty($_POST['uraian'])||empty($_POST['satuan'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='tabel_item_kerja.php';
            </script>
        <?php
    } else {
	
		//buat koneksi MySQL untuk user: root, tanpa password, alamat: localhost
			$link=mysqli_connect('127.0.0.1','root','','db_Pengawasan');
	


	//diganti nama tabel!!! diganti nama variabel diatas
  	$sql="insert into item_pekerjaan (no_item,uraian,satuan,kuantitas,ket) values
		('$noitem','$uraian','$satuan','$kuantitas','$ket')";

	//Mengeksekusi/menjalankan query diatas	
  	$hasil=mysqli_query($link,$sql);

	//Kondisi apakah berhasil atau tidak
	  if ($hasil) {
		
		?>             
				<script language="JavaScript">
                alert('Pengisian Info Proyek Berhasil!');
                document.location='tabel_item_kerja.php';
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