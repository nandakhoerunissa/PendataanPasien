<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:pasien.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tbpasien WHERE id=$kode";
$query = mysqli_query($koneksi,$sql);
$pasien = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <form action="prosesedit.php" method="POST">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $pasien['id']?>" />
                <p>
        <label for="nama"> Nama Lengkap : </label>
        <input type="text" name="nama" value="<?php echo $pasien['nama']?>" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <textarea name="alamat" row="5" value="<?php echo $pasien['alamat']?>" ></textarea>
    </p>
    <p>
        <label for="Jk"> Jenis Kelamin : </label>
        <label><input type="radio" name="Jk" value="laki-laki" value="<?php echo $pasien['Jk']?>" />Laki-Laki </label>
        <label><input type="radio" name="Jk" value="perempuan" value="<?php echo $pasien['Jk']?>" />Perempuan </label>
    </p>
    <p>
        <label for="no_tlpn"> No Telepon : </label>
        <input type="number" name="no_tlpn" value="<?php echo $pasien['no_tlpn']?>"/>
    </p>
    <p>
        <label for="agama"> Agama : </label>
        <select name="agama" value="<?php echo $pasien['agama']?>">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen </option>
        <option value="katolik">Katolik </option>
        <option value="buddha">Buddha </option>
        <option value="hindu">Hindu </option>
        <option value="konghucu">konghucu</option>
        </select> 
    </p>
    <p>
        <label for="tanggal_masuk"> Tanggal Masuk : </label>
        <input type="date" name="tanggal_masuk" value="<?php echo $pasien['tanggal_masuk']?>"/>
    </p>
    <p>
        <label for="gejala"> Gejala : </label>
        <input type="text" name="gejala" value="<?php echo $pasien['gejala']?>"/>
    </p>
    <p>
        <label for="tempat_lahir"> Tempat Lahir : </label>
        <input type="text" name="tempat_lahir" value="<?php echo $pasien['tempat_lahir']?>"/>
    </p>
    <p>
        <label for="tanggal_lahir"> Tanggal Lahir : </label>
        <input type="date" name="tanggal_lahir" value="<?php echo $pasien['tanggal_lahir']?>"/>
    <p>
       <label for="no_kamar"> No Kamar : </label>
       <input type="number" name="no_kamar" value="<?php echo $pasien['no_kamar']?>"/>
    </p>
<p>
<input type="submit" value="edit" name="edit" /> 
</p>
</fieldset>
</form>
</body>
</html>