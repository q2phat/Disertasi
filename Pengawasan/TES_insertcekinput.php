<?php
if ($_POST['Submit'] == "INPUT") {
    //menerima nilai dari kiriman form TES_cekinput
    $nama = $_POST["nama"];
    $nomor = $_POST["nomor"];
    $ket = $_POST["ket"];
    $angka = $_POST["angka"];

    echo "Cek 1";
    //validasi data data kosong
    if (empty($_POST['nama']) || empty($_POST['nomor']) || empty($_POST['ket'])) {
        ?>
        <script language="JavaScript">
            alert('Data Harap Dilengkapi!');
            document.location = 'TES_cekinput.php';
        </script>
        <?php
        echo "Cek 2";
    } else {

        //buat koneksi MySQL untuk user: root, tanpa password, alamat: localhost
        $link = mysqli_connect('127.0.0.1', 'root', '', 'db_Pengawasan');
        echo "Cek 3";


        //diganti nama tabel!!! diganti nama variabel diatas
        $sql = "INSERT INTO tes_cekinput (nama,nomor,keterangan,angka) VALUES ('$nama','$nomor','$ket','$angka')";

        echo "Cek 4";
        //Mengeksekusi/menjalankan query diatas
        $hasil = mysqli_query($link, $sql);

        echo "Cek 5";
        //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            echo "Cek 6";
            ?>
            <script language="JavaScript">
                alert('Pengisian Info Proyek Berhasil!');
                document.location = 'TES_cekinput.php';
            </script>
            <?php
            exit;
        } else {
            echo "Gagal Input Info Proyek";
            exit;
        }
    }
}
?>
