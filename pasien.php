<?php
include("koneksi.php");?>

<html>
    <head>
    </head>
    <body>
    <h1>Data pendataan pasien</h1>
    <h4> <a href=index.php>tambah pasien</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama lengkap</th>
            <th>Alamat</th>
            <th>Jk</th>
            <th>no_tlpn</th>
            <th>Agama</th>
            <th>Tanggal Masuk</th>
            <th>Gejala</th>
            <th>Tempat Lahir</th>
            <th>tanggal Lahir</th>
            <th>no Kamar</th>
</tr>


<?php
include("koneksi.php");
$sql='SELECT * FROM tbpasien';
$query = mysqli_query($koneksi, $sql);

while($pasien=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>" .$pasien['id']."</td>";
    echo "<td>" .$pasien['nama']."</td>";
    echo "<td>" .$pasien['alamat']."</td>";
    echo "<td>" .$pasien['Jk']."</td>";
    echo "<td>" .$pasien['no_tlpn']."</td>";
    echo "<td>" .$pasien['agama']."</td>";
    echo "<td>" .$pasien['tanggal_masuk']."</td>";
    echo "<td>" .$pasien['gejala']."</td>";
    echo "<td>" .$pasien['tempat_lahir']."</td>";
    echo "<td>" .$pasien['tanggal_lahir']."</td>";
    echo "<td>" .$pasien['no_kamar']."</td>";
    echo "<td>";
    echo "<a href='edit-pasien.php?id". $pasien['id']. "'>Edit</a>|";
    echo "<a href='hapus-pasien.php?id". $pasien['id']. "'>hapus</a>";
    echo "</tr>";
}

?>
</table>
</body>
</html>