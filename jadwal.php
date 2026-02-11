<?php
$nama = "Maharani"; 

// Data jadwal X PPLG 3
$jadwal = [
    1 => ["POR", "INF", "BNG", "PGD", "BIN"],
    2 => ["POR", "INF", "BNG", "PGD", "BIN"],
    3 => ["POR", "KKA", "SNM", "PGD", "SJR"],
    4 => ["BNG", "KKA", "SNM", "PGD", "SJR"],
    5 => ["BNG", "PGD", "MTK", "GIM", "MTK"],
    6 => ["BJW", "PGD", "MTK", "GIM", "MTK"],
    7 => ["BJW", "PGD", "PPS", "GIM", "IPAS"],
    8 => ["PABP", "IPAS", "PPS", "GIM", "IPAS"],
    9 => ["PABP", "IPAS", "BIN", "IPAS", "-"],
    10 => ["PABP", "IPAS", "BIN", "IPAS", "-"]
];

// Data piket
$piket = [
    "Senin" => "Ahmad, Zaidan, Chayu, Alif, Ulhaq, Vania, Kynan, Dova",
    "Selasa" => "Anandira, Rania, Chessa, Vanessa, Finza, Erel, Tegar",
    "Rabu" => "Anggita, Silvia, Dimas, Tiara, Furan, Athala, Maharani",
    "Kamis" => "Aurelia, Aisyah, Darus, M. Zidan, Galuh, Dzaky, Aini",
    "Jumat" => "Zahran, Keisha, Azzahro, Archuleta, Nnyko, Khayra, Destia"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Jadwal Pelajaran & Piket</title>

<style>
body{
    font-family: 'Inter', sans-serif;
    background: linear-gradient(to right,#cce7ff,#99ccff);
    padding:20px;
}
.container{
    background:white;
    padding:25px;
    border-radius:15px;
}
table{
    width:100%;
    border-collapse:collapse;
}
th,td{
    border:1px solid #ccc;
    padding:8px;
    text-align:center;
}
th{
    background:#3399ff;
    color:white;
}
.highlight{
    background:#d6ecff;
    color:#0066cc;
    font-weight:bold;
}
.piket-card{
    background:#f0f8ff;
    padding:10px;
    margin:8px 0;
    border-radius:8px;
}
.btn-next{
    display:inline-block;
    margin-top:15px;
    padding:8px 15px;
    background:#3399ff;
    color:white;
    text-decoration:none;
    border-radius:8px;
}
.btn-next:hover{
    background:#0066cc;
}
</style>

</head>
<body>

<div class="container">

<h1>Jadwal Pelajaran</h1>
<p>Tahun Ajaran 2025/2026</p>

<table>
<thead>
<tr>
<th>Jam</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
</tr>
</thead>
<tbody>
<?php foreach ($jadwal as $jam => $mapel): ?>
<tr>
<td><?= $jam ?></td>
<td><?= $mapel[0] ?></td>
<td><?= $mapel[1] ?></td>
<td><?= $mapel[2] ?></td>
<td><?= $mapel[3] ?></td>
<td><?= $mapel[4] ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

<h2>Jadwal Piket</h2>

<?php foreach($piket as $hari => $namaPiket): ?>
<div class="piket-card">
<strong><?= $hari ?></strong><br>
<?php 
if(strpos($namaPiket, $nama) !== false){
    $namaPiket = str_replace($nama, "<span class='highlight'>$nama</span>", $namaPiket);
}
echo $namaPiket;
?>
</div>
<?php endforeach; ?>

<a href="biodata.php" class="btn-next">⬅ Ke Halaman Biodata</a>

</div>

</body>
</html>
