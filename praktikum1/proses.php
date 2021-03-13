<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1 - Farid Muhari</title>

    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    $nama_siswa = $_POST ['nama'];
    $matkul = $_POST ['matkul'];
    $nilai_uts = $_POST ['uts'];
    $nilai_uas = $_POST ['uas'];
    $nilai_tugas = $_POST ['tugas'];


    $ns1 = ['nama'=> 'Farid Muhari', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = ['nama'=> 'Nazyli Evry Ciptanto', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = ['nama'=> 'Brilianty Dini','uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = ['nama'=> 'Supryanto Joko', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
    $ns5 = ['nama'=> $nama_siswa, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas]; 

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
    ?>

    <div class="container">
    <center><h2>Daftar Nilai Siswa</h2></center>
    <br>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nama'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
    </table>
</body>
</html>