<?php
// Membuat koneksi MySQL
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');


// Menjalankan query untuk mengambil data dari tabel tes_cekinput
$query = "SELECT * FROM tes_cekinput";
$result = mysqli_query($link, $query);


// Menampilkan data dalam bentuk form dengan checkbox
if (mysqli_num_rows($result) > 0) {

    // Pengaturan tampilan
    echo "<style>
            table {
                border-collapse: collapse;
                width: 100%;
                font-family: Arial, sans-serif;
            }
            
            table th {
                background-color: #f2f2f2;
                text-align: left;
                padding: 8px;
            }
            
            table td {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            table tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            
            table tr:hover {
                background-color: #f2f2f2;
            }
        </style>";

    echo "<form action=\"TES_ceklist.php\" method=\"post\">";
    echo "<table>";
    echo "<tr><th>Pilih</th><th>Nama</th><th>Nomor</th><th>Keterangan</th><th>Angka</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td><input type=\"checkbox\" name=\"pilihan[{$row['id']}]\" id=\"pilihan{$row['id']}\" value=\"{$row['id']}\"></td>";
		//sesuai dengan nama kolom pada tabel tes_cekinput database?
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['nomor'] . "</td>";
        echo "<td>" . $row['keterangan'] . "</td>";
        echo "<td>" . $row['angka'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<input type=\"submit\" name=\"submit\" value=\"Setujui\">";
    echo "</form>";
	
} else {
    echo "Tidak ada data yang ditemukan.";
}



/*
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == "Setujui") {echo "cek-06 .... <br>";
    // Membuat koneksi MySQL
    $link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');

    // Memeriksa apakah pilihan checkbox dikirimkan melalui formss
    if (isset($_POST['pilihan'])) {
echo "tes-1 setelah periksa pilihan checkbox dikirim melalui form<br>";
        // Mendapatkan pilihan checkbox yang dicentang
        $pilihan = $_POST['pilihan'];
echo "tes-2 setelah mendapat pilihan checkbox dicentang<br>";
        // Melakukan iterasi melalui pilihan yang dicentang
        foreach ($pilihan as $id => $value) {
echo "tes-3 melakukan iteriasi terhadap pilihan yang dicentang<br>";
            // Memeriksa apakah checkbox dicentang
            if (!empty($value)) {
echo "tes-4 Memeriksa apakah checkbox dicentang<br>";
                // Mengambil data dari tabel lapor_penghamparan berdasarkan ID
                $query = "SELECT * FROM tes_cekinput WHERE id = $id";
                $result = mysqli_query($link, $query);
echo "tes-5 Mengambil data dari tabel tes_cekinput berdasarkan ID<br>";
                // Memeriksa apakah data ditemukan
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);

                    // Memasukkan data ke dalam tabel cek_laporpenghamparan
                    $sql = "INSERT INTO tes_inputceklist (nama, nomor, keterangan, angka) VALUES ('{$row['nama']}', '{$row['nomor']}', '{$row['keterangan']}', '{$row['angka']}')";
					
echo "tes-6 Memasukkan data ke dalam tabel cek_laporpenghamparan<br>";
					
                    // Menjalankan query untuk memasukkan data ke dalam tabel cek_laporpenghamparan
                    mysqli_query($link, $sql);
                }
            }
        }

        // Menampilkan pesan sukses setelah data berhasil dimasukkan ke dalam tabel cek_laporpenghamparan
        echo "Data berhasil ditambahkan ke dalam tabel tes_inputceklist.";
    } else {
        // Menampilkan pesan jika tidak ada pilihan checkbox yang dicentang
        echo "Tidak ada data yang dipilih.";
    }
	

    // Menutup koneksi
    mysqli_close($link);
}
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == "Setujui") {
    // Membuat koneksi MySQL
    $link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');
	echo "Tes-1 Koneksi MySQL<br>";
    // Memeriksa apakah pilihan checkbox dikirimkan melalui form
    if (isset($_POST['pilihan'])) {
        // Mendapatkan pilihan checkbox yang dicentang
        $pilihan = $_POST['pilihan'];
		echo "Tes-2 pilihan checkbox dikirimkan<br>";
        // Memeriksa apakah pilihan checkbox bukan array kosong
        if (!empty($pilihan)) {
            // Menyiapkan array untuk menampung data yang akan diinsert
            $dataToInsert = [];
			echo "Tes-3 Menyiapkan array<br>";
            // Melakukan iterasi melalui pilihan yang dicentang
            foreach ($pilihan as $id => $value) {
                // Memeriksa apakah checkbox dicentang
                if (!empty($value)) {
                    // Mengambil data dari tabel tes_cekinput berdasarkan ID
                    $query = "SELECT * FROM tes_cekinput WHERE id = $id";
                    $result = mysqli_query($link, $query);

                    // Memeriksa apakah data ditemukan
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $dataToInsert[] = $row; // Menambahkan data ke dalam array
                    }
                }
            }

            // Memeriksa apakah terdapat data yang akan diinsert
            if (!empty($dataToInsert)) {
                // Memasukkan data ke dalam tabel tes_inputceklist

                // Menggunakan prepared statements untuk mencegah SQL injection
                $sql = "INSERT INTO tes_inputceklist (nama, nomor, keterangan, angka) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_prepare($link, $sql);

                // Menjalankan pernyataan persiapan
                foreach ($dataToInsert as $data) {
                    mysqli_stmt_bind_param($stmt, "siss", $data['nama'], $data['nomor'], $data['keterangan'], $data['angka']);
                    mysqli_stmt_execute($stmt);
                }

                // Menutup pernyataan persiapan
                mysqli_stmt_close($stmt);

                // Menampilkan pesan sukses setelah data berhasil dimasukkan ke dalam tabel tes_inputceklist
                echo "Data berhasil ditambahkan ke dalam tabel tes_inputceklist.<br>";
            }
        } else {
            // Menampilkan pesan jika tidak ada pilihan checkbox yang dicentang
            echo "Tidak ada data yang dipilih.";
        }
    }

    // Menutup koneksi
    mysqli_close($link);
}


?>