<?php
// buatlah data array siswa dengan array assosiatif
$ns1 = ['id'=>1, 'nim'=>'0110122121', 'uts'=>80, 'uas'=>84, 'tugas'=>78];
$ns2 = ['id'=>2, 'nim'=>'0112216310', 'uts'=>85, 'uas'=>90, 'tugas'=>88];
$ns3 = ['id'=>3, 'nim'=>'0110222250', 'uts'=>89, 'uas'=>95, 'tugas'=>98];
// simpan seluruh data variable array assosiatif 
// ke dalam array indexing
$ar_nilai = [$ns1,$ns2,$ns3];
?>

<h3 style="text-align: center;" >Daftar Nilai Siswa </h3>
<table border="1" width="100%">
    <thead>
        <th>NO</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $nilai){
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>' .$nilai['nim']. '</td>';
            echo '<td>' .$nilai['uts']. '</td>';
            echo '<td>' .$nilai['uas']. '</td>';
            echo '<td>' .$nilai['tugas']. '</td>';
            $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir) .'</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
</div>
</body>
</html>