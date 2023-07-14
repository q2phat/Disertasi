<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_Pengawasan');

if(isset($_POST['submit']) && isset($_POST['pilihan'])) {
    $pilihan = $_POST['pilihan'];

    $urutan = 1;
    foreach($pilihan as $id) {
        $query = "SELECT * FROM tes_cekinput WHERE id = '$id'";
        $result = mysqli_query($link, $query);

        if(mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);

            $nama = $data['nama'];
            $nomor = $data['nomor'];
            $keterangan = $data['keterangan'];
            $angka = $data['angka'];

            $insertQuery = "INSERT INTO tes_inputceklist (nama, nomor, keterangan, angka, urutan) VALUES ('$nama', '$nomor', '$keterangan', '$angka', '$urutan')";
            mysqli_query($link, $insertQuery);

            $urutan++;
        }
    }

    echo "Data yang terpilih berhasil disimpan ke dalam tabel tes_inputceklist.";
} else {
    echo "Tidak ada data yang dipilih.";
}

mysqli_close($link);
?>
