<?php
// Membuat koneksi MySQL
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');

// Menjalankan query untuk mengambil data dari tabel lapor_penghamparan
$query = "SELECT * FROM lapor_penghamparan";
$result = mysqli_query($link, $query);

// Menampilkan data dalam bentuk form dengan checkbox
if (mysqli_num_rows($result) > 0) {
    echo "<form action=\"proses_setujui.php\" method=\"post\">";
    echo "<table>";
    echo "<tr><th>Pilih</th><th>No Item</th><th>Nama Item</th><th>Peruntukan</th><th>Panjang</th><th>Dok. Ukur Panjang</th><th>GPS Dok. Ukur Panjang</th><th>Waktu Dok. Ukur Panjang</th><th>Lebar</th><th>Dok. Ukur Lebar</th><th>GPS Dok. Ukur Lebar</th><th>Waktu Dok. Ukur Lebar</th><th>Tebal</th><th>Dok. Ukur Tebal</th><th>GPS Dok. Ukur Tebal</th><th>Waktu Dok. Ukur Tebal</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td><input type=\"checkbox\" name=\"pilihan[]\" value=\"" . $row['id'] . "\"></td>";
        echo "<td>" . $row['no_item'] . "</td>";
        echo "<td>" . $row['nm_item'] . "</td>";
        echo "<td>" . $row['peruntukan'] . "</td>";
        echo "<td>" . $row['pjg_m'] . "</td>";
        echo "<td>" . $row['dok_ukur_pjg'] . "</td>";
        echo "<td>" . $row['gps_dok_ukurpjg'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurpjg'] . "</td>";
        echo "<td>" . $row['lbr_m'] . "</td>";
        echo "<td>" . $row['dok_ukur_lbr'] . "</td>";
        echo "<td>" . $row['gps_dok_ukurlbr'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurlbr'] . "</td>";
        echo "<td>" . $row['tbl_m'] . "</td>";
        echo "<td>" . $row['dok_ukur_tbl'] . "</td>";
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

// Menutup koneksi
mysqli_close($link);
?>


<?php
// Membuat koneksi MySQL
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');

// Memeriksa apakah form dikirimkan
if (isset($_POST['submit'])) {
    // Memeriksa apakah ada pilihan yang dipilih
    if (isset($_POST['pilihan']) && is_array($_POST['pilihan'])) {
        // Menghindari serangan SQL Injection
        $pilihan = array_map('intval', $_POST['pilihan']);
        $pilihan = implode(',', $pilihan);

// Memindahkan data yang dipilih ke tabel cek_laporpenghamparan
$query = "INSERT INTO cek_laporpenghamparan (id, no_item, nm_item, peruntukan, pjg_m, dok_ukur_pjg, gps_dok_ukurpjg, wkt_dok_ukurpjg, lbr_m, dok_ukur_lbr, gps_dok_ukurlbr, wkt_dok_ukurlbr, tbl_m, dok_ukur_tbl, gps_dok_ukurtbl, wkt_dok_ukurtbl) 
          SELECT lp.id, lp.no_item, lp.nm_item, lp.peruntukan, lp.pjg_m, lp.dok_ukur_pjg, lp.gps_dok_ukurpjg, lp.wkt_dok_ukurpjg, lp.lbr_m, lp.dok_ukur_lbr, lp.gps_dok_ukurlbr, lp.wkt_dok_ukurlbr, lp.tbl_m, lp.dok_ukur_tbl, lp.gps_dok_ukurtbl, lp.wkt_dok_ukurtbl
          FROM lapor_penghamparan lp
          JOIN (
              SELECT " . implode(" UNION ALL SELECT ", $_POST['pilihan']) . "
          ) c ON lp.id = c.id";

$result = mysqli_query($link, $query);


        if ($result) {
            echo "Data berhasil disetujui dan dimasukkan ke dalam tabel cek_laporpenghamparan.";
        } else {
            echo "Terjadi kesalahan dalam pemrosesan data.";
        }
    } else {
        echo "Tidak ada data yang dipilih.";
    }
} else {
    echo "Akses tidak valid.";
}

// Menutup koneksi
mysqli_close($link);
?>
