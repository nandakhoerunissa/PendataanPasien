<?php
include("koneksi.php");
isset($_GET)
$_kode =$_GET['id'];
$sql="DELETE FROM tbpasien where id=$kode";
$query= mysqli_query("$koneksi,$sql");

if($query){
    header("Location:pasien.php?status=sukses");
}else{
    die("akses dilarang");
}
?>