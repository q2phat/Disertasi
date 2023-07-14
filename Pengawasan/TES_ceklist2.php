<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_Pengawasan');

$query = "SELECT * FROM tes_cekinput";
$result = mysqli_query($link, $query);

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

    echo "<form action=\"TES_insertceklist.php\" method=\"post\">";
    echo "<table>";
    echo "<tr><th>pilihan</th><th>Nama</th><th>Nomor</th><th>Keterangan</th><th>Angka</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td><input type=\"checkbox\" name=\"pilihan[]\" value=\"" . $row['id'] . "\"></td>";
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
mysqli_close($link);
?>
