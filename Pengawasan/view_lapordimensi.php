<?php
// Membuat koneksi MySQL
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_pengawasan');

// Menjalankan query untuk mengambil data dari tabel lapor_penghamparan
$query = "SELECT * FROM lapor_penghamparan";
$result = mysqli_query($link, $query);

// Menampilkan data dalam bentuk tabel
if (mysqli_num_rows($result) > 0) {
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

    echo "<table>
            <thead>
                <tr>
                    <th>No Item</th>
                    <th>Nama Item</th>
                    <th>Peruntukan</th>
                    <th>Panjang</th>
                    <th>Dok. Ukur Panjang</th>
                    <th>GPS Dok. Ukur Panjang</th>
                    <th>Waktu Dok. Ukur Panjang</th>
                    <th>Lebar</th>
                    <th>Dok. Ukur Lebar</th>
                    <th>GPS Dok. Ukur Lebar</th>
                    <th>Waktu Dok. Ukur Lebar</th>
                    <th>Tebal</th>
                    <th>Dok. Ukur Tebal</th>
                    <th>GPS Dok. Ukur Tebal</th>
                    <th>Waktu Dok. Ukur Tebal</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['no_item'] . "</td>";
        echo "<td>" . $row['nm_item'] . "</td>";
        echo "<td>" . $row['peruntukan'] . "</td>";
        echo "<td>" . $row['pjg_m'] . "</td>";
        //echo "<td>" . $row['dok_ukur_pjg'] . "</td>";
		echo "<td><img src='" . $row['dok_ukur_pjg'] . "' alt='Dok. Ukur Panjang'></td>";
        echo "<td>" . $row['gps_dok_ukurpjg'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurpjg'] . "</td>";
        echo "<td>" . $row['lbr_m'] . "</td>";
        //echo "<td>" . $row['dok_ukur_lbr'] . "</td>";
		echo "<td><img src='" . $row['dok_ukur_lbr'] . "' alt='Dok. Ukur Lebar'></td>";
        echo "<td>" . $row['gps_dok_ukurlbr'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurlbr'] . "</td>";
        echo "<td>" . $row['tbl_m'] . "</td>";
        //echo "<td>" . $row['dok_ukur_tbl'] . "</td>";
		echo "<td><img src='" . $row['dok_ukur_tbl'] . "' alt='Dok. Ukur Tebal'></td>";
        echo "<td>" . $row['gps_dok_ukurtbl'] . "</td>";
        echo "<td>" . $row['wkt_dok_ukurtbl'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>
          </table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

// Menutup koneksi
mysqli_close($link);
?>
