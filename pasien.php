<?php
include 'koneksi.php';
?>

 <h1>Data Pasien </h1>
 <h4> <a href=index.php> Ke Halaman Utama</a></h4>
<Form action="pasien.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>

<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
<?php
include("koneksi.php");
?>
<table border="1">
    <tr>
        <th>id</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>NO.telp</th>
        <th>Agama</th>
        <th>Tanggal Masuk</th>
        <th>Gejala</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>NO Kamar</th>
    </tr>


<?php
    include("koneksi.php");
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql = "SELECT * FROM tbpasien WHERE nama LIKE '%".$cari."%'";
        $query = mysqli_query($koneksi, $sql);
    }else{
        $sql='SELECT * FROM tbpasien';
        $query = mysqli_query($koneksi, $sql);
    }

    while($pasien=mysqli_fetch_array($query)){
    echo "<tr>";
             echo "<td>".$pasien['id']."</td>";
             echo "<td>".$pasien['nama']."</td>";
             echo "<td>".$pasien['alamat']."</td>";
             echo "<td>".$pasien['Jk']."</td>";
             echo "<td>".$pasien['no_tlpn']."</td>";
             echo "<td>".$pasien['agama']."</td>";
             echo "<td>".$pasien['tanggal_masuk']."</td>";
             echo "<td>".$pasien['gejala']."</td>";
             echo "<td>".$pasien['tempat_lahir']."</td>";
             echo "<td>".$pasien['tanggal_lahir']."</td>";
             echo "<td>".$pasien['no_kamar']."</td>";
             echo "<td>";
             echo "<a href='editdata.php?id=".$pasien['id']."'>Edit</a> |";
             echo "<a href='hapus.php?id=".$pasien['id']."'>Hapus</a> |";
             echo "</td>";
    echo "</tr>";

    }
?>
</table>
</body>
</html>
