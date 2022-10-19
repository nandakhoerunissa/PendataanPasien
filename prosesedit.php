<?php
include('koneksi.php');
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $Jk=$_POST['Jk'];
    $no_tlpn=$_POST['no_tlpn'];
    $agama=$_POST['agama'];
    $tempat_lahir=$_POST['tanggal_masuk'];
    $gejala=$_POST['gejala'];
    $tanggal_lahir=$_POST['tempat_lahir'];
    $no_kamar=$_POST['tanggal_lahir'];
    $tanggal_masuk=$_POST['no_kamar'];

$sql = "UPDATE tbpasien SET nama='$nama', alamat='$alamat', Jk='$Jk',no_tlpn='$no_tlpn', agama='$agama',
 tanggal_masuk='$tanggal_masuk', gejala='$gejala, tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',
  no_kamar='$no_kamar' WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('Location: index.php');
}else{
    die ("gagal mengedit");
}}
else{
    die("akses dilarang");
}
?>