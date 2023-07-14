<?php
// buat koneksi MySQL untuk user: root, tanpa password, alamat: localhost
$link = mysqli_connect('127.0.0.1', 'root', '', 'db_Pengawasan');

// cek apakah koneksi dengan MySQL berhasil
if ($link) {
    // koneksi berhasil
    echo "<h1>Koneksi dengan MySQL berhasil</h1>";

    // ambil data dari tabel tb_infoproyek
    $query = "SELECT * FROM tb_infoproyek";
    $hasil = mysqli_query($link, $query);

    // tampilkan data dalam bentuk tabel dengan tampilan menarik
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

    echo "<table>";
    echo "<tr>
            <th>Nomor Kontrak</th>
            <th>Nama Paket</th>
            <th>Nama SATKER</th>
            <th>Nama PPK</th>
            <th>Nilai Kontrak (Rp)</th>
            <th>Lokasi Pekerjaan</th>
            <th>Tanggal Kontrak</th>
            <th>Masa Pelaksanaan (hari)</th>
            <th>Tanggal PHO</th>
          </tr>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr>";
        echo "<td>{$data['no_kontrak']}</td>";
        echo "<td>{$data['nm_paket']}</td>";
        echo "<td>{$data['nm_satker']}</td>";
        echo "<td>{$data['nm_ppk']}</td>";
        echo "<td>{$data['nil_kontrak']}</td>";
        echo "<td>{$data['lokasi']}</td>";
        echo "<td>{$data['tgl_kontrak']}</td>";
        echo "<td>{$data['wkt_plksn']}</td>";
        echo "<td>{$data['tgl_pho']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    // koneksi gagal
    echo "<h1>Koneksi dengan MySQL gagal</h1>";
}
?>
