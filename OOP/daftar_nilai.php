<?php
    require_once 'class_nilaimahasiswa.php';

    $mhs1 = new NilaiMahasiswa();
    $mhs1->nama = 'Nailah Husna';
    $mhs1->matakuliah = 'Pemrograman Web';
    $mhs1->nilai_uts = 80;
    $mhs1->nilai_uas = 85;
    $mhs1->nilai_tugas = 78;

    $mhs2 = new NilaiMahasiswa();
    $mhs2->nama = 'Febrian Adi';
    $mhs2->matakuliah = 'Pemrograman Web';
    $mhs2->nilai_uts = 100;
    $mhs2->nilai_uas = 75;
    $mhs2->nilai_tugas = 80;

    $mhs3 = new NilaiMahasiswa();
    $mhs3->nama = 'Fakhry Algi';
    $mhs3->matakuliah = 'Pemrograman Web';
    $mhs3->nilai_uts = 60;
    $mhs3->nilai_uas = 50;
    $mhs3->nilai_tugas = 55;

    $ar_mahasiswa = [$mhs1, $mhs2, $mhs3];
?>

<h2 style="text-align:center">DAFTAR NILAI MAHASISWA</h2>
<table border="1" cellpadding="2" cellspacing="2" width="100%">
    <thead>
        <tr><th>No</th><th>Nama Mahasiswa</th><th>Mata Kuliah</th>
        <th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Tugas</th>
        <th>Nilai Akhir</th><th>Keterangan</th></tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($ar_mahasiswa as $mhs) {
        ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$mhs->nama?></td>
            <td><?=$mhs->matakuliah?></td>
            <td><?=$mhs->nilai_uts?></td>
            <td><?=$mhs->nilai_uas?></td>
            <td><?=$mhs->nilai_tugas?></td>
            <td><?=$mhs->getNilaiAkhir()?></td>
            <td><?=$mhs->kelulusan()?></td>
        </tr>

        <?php
        $no++;
        }
        ?>
    </tbody>
</table>