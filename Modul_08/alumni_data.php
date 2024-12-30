<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['alumni'][] = [
        "nama" => $_POST['nama'],
        "tahunKelulusan" => $_POST['tahunKelulusan'],
        "statusAktif" => filter_var($_POST['statusAktif'], FILTER_VALIDATE_BOOLEAN),
        "kategoriPekerjaan" => $_POST['kategoriPekerjaan']
    ];
    echo "Data berhasil disimpan!";
    exit;
}
if (!empty($_SESSION['alumni'])) {
    echo "<table class='table table-bordered'>
            <thead><tr><th>Nama</th><th>Tahun Kelulusan</th><th>Status</th><th>Kategori Pekerjaan</th></tr></thead>
            <tbody>";
    foreach ($_SESSION['alumni'] as $data) {
        echo "<tr>
                <td>{$data['nama']}</td>
                <td>{$data['tahunKelulusan']}</td>
                <td>" . ($data['statusAktif'] ? 'Aktif' : 'Tidak Aktif') . "</td>
                <td>{$data['kategoriPekerjaan']}</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>Belum ada data alumni yang tersimpan.</p>";
}
?>