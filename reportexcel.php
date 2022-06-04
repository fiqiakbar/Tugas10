<?php

include('koneksi.php');
// menggunakan library phpspreadsheet
require 'E:\xamppp\htdocs\reportexcel\vendor\autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$header = array(
    'Jenis Pendaftar', 'Tanggal Masuk Sekolah', 'NIS',
    'Nomor Peserta Ujian', 'Apakah pernah PAUD',
    'Apakah pernah TK', 'No. Seri SKHUN sebelumnya',
    'No. Seri Ijazah sebelumnya', 'Hobi', 'Cita-cita',
    'Nama Lengkap', 'Jenis Kelamin', 'NISN', 'NIK',
    'Tempat Lahir', 'Tanggal Lahir', 'Agama',
    'Berkebutuhan Khusus', 'Alamat Jalan', 'RT', 'RW',
    'Nama Dusun', 'Nama Kelurahan/Desan', 'Kecamatan',
    'Kode Pos', 'Tempat Tinggal', 'Modal Transportasi',
    'Nomor HP', 'Nomor Telepon', 'Email Pribadi', 'Kewarganegaraan'
);
$columm = array(
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
    'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
    'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD',
    'AE', 'AF', 'AG'
);
$dbcolumm = array(
    'jp', 'tgl_masuk', 'nis', 'npu', 'pernah_paud',
    'pernah_tk', 'skhun', 'ijazah', 'hobi', 'cita',
    'nama', 'jk', 'nisn', 'nik', 'tl',
    'tgl_lahir', 'agama', 'bk', 'jalan', 'rt',
    'rw', 'dusun', 'desa', 'kecamatan', 'kodepos',
    'tinggal', 'transportasi', 'nohp', 'notelp', 'email', 'kwn'
);
//sheet headery
for ($i = 0; $i < sizeof($header); $i++) {
    # code...
    $j = 1;
    $sheet->setCellValue($columm[$i] . $j, $header[$i]);
}

$query = mysqli_query($conn, "select * from data");

$indexrow = 2;
while ($row = mysqli_fetch_array($query)) {
    # code...
    for ($i = 0; $i < sizeof($header); $i++) {
        # code...
        $sheet->setCellValue($columm[$i] . $indexrow, $row[$dbcolumm[$i]]);
    }

    $indexrow = $indexrow + 1;
}

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.Xlsx');
