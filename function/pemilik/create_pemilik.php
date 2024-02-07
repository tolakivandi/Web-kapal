<?php
include_once'../../inc/config.php';

$nama_pemilik= $_POST['nama_pemilik'];
$alamat= $_POST['alamat'];
$no_hp = $_POST["no_hp"];

$query = mysqli_query($connection,"INSERT INTO pemilik (nama_pemilik,alamat,no_hp) VALUES ('$nama_pemilik',
'$alamat','$no_hp')");

if($query){
    echo "<script>
    alert('Pemilik berhasil di tambahkan');
    document.location.href = '../../pemilik/pemilik.php';
    </script>";
}else{
    echo "<script>
    alert('Pemilik gagal di tambahkan');
    document.location.href = '../../pemilik/pemilik.php';
    </script>";
}
?>