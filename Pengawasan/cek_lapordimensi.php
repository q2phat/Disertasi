<?php
// Membuat koneksi MySQL
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');

// Menjalankan query untuk mengambil data dari tabel lapor_penghamparan
$query = "SELECT * FROM lapor_penghamparan";
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

    echo "<form action=\"proses_setujui.php\" method=\"post\">";
    echo "<table>";
    echo "<tr><th>Pilih</th><th>No Item</th><th>Nama Item</th><th>Peruntukan</th><th>Panjang</th><th>Dok. Ukur Panjang</th><th>GPS Dok. Ukur Panjang</th><th>Waktu Dok. Ukur Panjang</th><th>Lebar</th><th>Dok. Ukur Lebar</th><th>GPS Dok. Ukur Lebar</th><th>Waktu Dok. Ukur Lebar</th><th>Tebal</th><th>Dok. Ukur Tebal</th><th>GPS Dok. Ukur Tebal</th><th>Waktu Dok. Ukur Tebal</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td><input type=\"checkbox\" name=\"pilihan[{$row['id']}]\" id=\"pilihan{$row['id']}\" value=\"{$row['id']}\"></td>";
        echo "<td>" . $row['no_item'] . "</td>";
        echo "<td>" . $row['nm_item'] . "</td>";
        echo "<td>" . $row['peruntukan'] . "</td>";
        echo "<td>" . $row['pjg_m'] . "</td>";
        echo "<td><img src='" . $row['dok_ukur_pjg'] . "' alt='Dok. Ukur Panjang'></td>";
        echo "<td>" . $row['gps_dok_ukurpjg'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurpjg'] . "</td>";
        echo "<td>" . $row['lbr_m'] . "</td>";
        echo "<td><img src='" . $row['dok_ukur_lbr'] . "' alt='Dok. Ukur Lebar'></td>";
        echo "<td>" . $row['gps_dok_ukurlbr'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurlbr'] . "</td>";
        echo "<td>" . $row['tbl_m'] . "</td>";
        echo "<td><img src='" . $row['dok_ukur_tbl'] . "' alt='Dok. Ukur Tebal'></td>";
        echo "<td>" . $row['gps_dok_ukurtbl'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurtbl'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<input type=\"submit\" name=\"submit\" value=\"Setujui\">";
    echo "</form>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == "Setujui") {
    // Membuat koneksi MySQL
    $link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');

    // Memeriksa apakah pilihan checkbox dikirimkan melalui formss
    if (isset($_POST['pilihan'])) {
echo "tes-1 setelah periksa pilihan checkbox dikirim melalui form";
        // Mendapatkan pilihan checkbox yang dicentang
        $pilihan = $_POST['pilihan'];
echo "tes-2 setelah mendapat pilihan checkbox dicentang";
        // Melakukan iterasi melalui pilihan yang dicentang
        foreach ($pilihan as $id => $value) {
echo "tes-3 melakukan iteriasi terhadap pilihan yang dicentang";
            // Memeriksa apakah checkbox dicentang
            if (!empty($value)) {
echo "tes-4 Memeriksa apakah checkbox dicentang";
                // Mengambil data dari tabel lapor_penghamparan berdasarkan ID
                $query = "SELECT * FROM lapor_penghamparan WHERE id = $id";
                $result = mysqli_query($link, $query);
echo "tes-5 Mengambil data dari tabel lapor_penghamparan berdasarkan ID";
                // Memeriksa apakah data ditemukan
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);

                    // Memasukkan data ke dalam tabel cek_laporpenghamparan
                    $sql = "INSERT INTO cek_laporpenghamparan (no_item, nm_item, peruntukan, pjg_m, dok_ukur_pjg, gps_dok_ukurpjg, wkt_dok_ukurpjg, lbr_m, dok_ukur_lbr, gps_dok_ukurlbr, wkt_dok_ukurlbr, tbl_m, dok_ukur_tbl, gps_dok_ukurtbl, wkt_dok_ukurtbl) VALUES ('{$row['no_item']}', '{$row['nm_item']}', '{$row['peruntukan']}', '{$row['pjg_m']}', '{$row['dok_ukur_pjg']}', '{$row['gps_dok_ukurpjg']}', '{$row['wkt_dok_ukurpjg']}', '{$row['lbr_m']}', '{$row['dok_ukur_lbr']}', '{$row['gps_dok_ukurlbr']}', '{$row['wkt_dok_ukurlbr']}', '{$row['tbl_m']}', '{$row['dok_ukur_tbl']}', '{$row['gps_dok_ukurtbl']}', '{$row['wkt_dok_ukurtbl']}')";

                    // Menjalankan query untuk memasukkan data ke dalam tabel cek_laporpenghamparan
                    mysqli_query($link, $sql);
                }
            }
        }

        // Menampilkan pesan sukses setelah data berhasil dimasukkan ke dalam tabel cek_laporpenghamparan
        echo "Data berhasil ditambahkan ke dalam tabel cek_laporpenghamparan.";
    } else {
        // Menampilkan pesan jika tidak ada pilihan checkbox yang dicentang
        echo "Tidak ada data yang dipilih.";
    }

    // Menutup koneksi
    mysqli_close($link);
}
?>