<?php
// ================== VARIABEL ==================
$namaLengkap = "Maharani Usi Sulistiyowati";
$namaPanggilan = "Rani";
$agama = "Islam";
$tempatLahir = "Semarang";
$tanggalLahir = 10;
$bulanLahir = "Januari";
$tahunLahir = 2010;
$alamat = "Jl. Gajahmungkur dalam RT 01 RW 09, Kelurahan Gajahmungkur";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$noWa = "089513765863";
$email = "maharanisulis101@gmail.com";
$hobi = ["Memasak", "Jogging"];
$makananFavorit = ["Reddog", "Mie Ayam", "Ayam Geprek"];
$minumanFavorit = ["Kopi latte", "Chatime", "Air putih"];
$skills = 85;
$motto = "Setiap kesalahan adalah langkah menuju keberhasilan";

// Perhitungan umur
$tahunSekarang = date("Y");
$umur = $tahunSekarang - $tahunLahir;
$tahun10Lagi = $tahunSekarang + 10;
$umur10Lagi = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Rani</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    font-family: Arial;
    background: linear-gradient(to right, #d4f5e9, #a8e6cf);
    padding:20px;
}

.container{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

h2{
    color:#009688;
}

h3{
    color:#26a69a;
}

img{
    width:150px;
    border-radius:10px;
    border:3px solid #a8e6cf;
}

.progress{
    width:100%;
    accent-color:#26a69a;
}

marquee{
    font-weight:bold;
    color:#009688;
    font-size:16px;
}

a{
    text-decoration:none;
    color:white;
    background:#26a69a;
    padding:8px 15px;
    border-radius:10px;
    transition:0.3s;
}

a:hover{
    background:#009688;
}

table{
    border-collapse:collapse;
    width:100%;
}

th{
    background:#a8e6cf;
}

th, td{
    border:1px solid #ccc;
    padding:8px;
    text-align:center;
}
</style>

<script>
function sapa(){
    alert("Welcome to biodata Rani!");
}
</script>

</head>

<body onload="sapa()">

<div class="container">

<h2><i class="fa-solid fa-user"></i> BIODATA</h2>

<img src="foto.jpg" alt="Foto">

<p><b>Nama Lengkap:</b> <?php echo $namaLengkap; ?></p>
<p><b>Nama Panggilan:</b> <?php echo $namaPanggilan; ?></p>
<p><b>Agama:</b> <?php echo $agama; ?></p>
<p><b>Tempat, Tanggal Lahir:</b> <?php echo "$tempatLahir, $tanggalLahir $bulanLahir $tahunLahir"; ?></p>
<p><b>Umur:</b> <?php echo $umur; ?> tahun</p>
<p><b>Gender:</b> <?php echo $gender; ?></p>
<p><b>Alamat:</b> <?php echo $alamat; ?></p>
<p><b>Kewarganegaraan:</b> <?php echo $kewarganegaraan; ?></p>
<p><b>No WA:</b> <?php echo $noWa; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>

<h3><i class="fa-solid fa-heart"></i> Hobi</h3>
<ol>
<?php foreach($hobi as $h){ echo "<li>$h</li>"; } ?>
</ol>

<h3>Makanan Favorit</h3>
<ul type="square">
<?php foreach($makananFavorit as $m){ echo "<li>$m</li>"; } ?>
</ul>

<h3>Minuman Favorit</h3>
<ol type="A">
<?php foreach($minumanFavorit as $d){ echo "<li>$d</li>"; } ?>
</ol>

<h3>Skills</h3>
<input type="range" value="<?php echo $skills; ?>" class="progress">

<h3>Riwayat Pendidikan</h3>
<table>
<tr>
    <th>Tingkat</th>
    <th>Nama Sekolah</th>
    <th>Tahun Mulai</th>
    <th>Tahun Lulus</th>
</tr>
<tr>
    <td>SD</td>
    <td>SD Negeri Petompon 01</td>
    <td>2016</td>
    <td>2022</td>
</tr>
<tr>
    <td>SMP</td>
    <td>SMP Negeri 11</td>
    <td>2022</td>
    <td>2025</td>
</tr>
<tr>
    <td>SMK</td>
    <td>SMKN 8 Semarang</td>
    <td>2025</td>
    <td>2028</td>
</tr>
</table>

<h3>Keinginan 10 Tahun Lagi</h3>
<p>
Hai namaku <?php echo $namaPanggilan; ?>, saat ini tahun <?php echo $tahunSekarang; ?>, 
aku adalah seorang pelajar yang berumur <?php echo $umur; ?> tahun. 
10 tahun lagi di tahun <?php echo $tahun10Lagi; ?>, di umur <?php echo $umur10Lagi; ?> tahun 
aku ingin menjadi koki profesional dan memiliki restoran sendiri
</p>

<marquee><?php echo $motto; ?></marquee>

<br><br>
<a href="jadwal.php">Lihat Jadwal</a>

</div>
</body>
</html>
