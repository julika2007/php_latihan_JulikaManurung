<?php
$nama = "JULIKA MANURUNG";
$kelas = "TEKNIK KOMPUTER B Pagi";
$jurusan = "Teknik Komputer";
$umur = 19;
$nilai = 85;

if ($nilai >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}

echo "<pre>";
echo "================================<br>";
echo "          KARTU PROFIL SISWA<br>";
echo "================================<br>";
printf("Nama    : %s<br>", $nama);
printf("Kelas   : %s<br>", $kelas);
printf("Jurusan : %s<br>", $jurusan);
printf("Umur    : %d tahun<br>", $umur);
printf("Nilai   : %d<br>", $nilai);
echo "================================<br>";
echo "Status  : " . $status . "<br>";
echo "</pre>";
?>