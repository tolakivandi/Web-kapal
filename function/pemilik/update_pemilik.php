<?php
include_once'../../inc/config.php';

$nama_pemilik= $_POST['nama_pemilik'];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$id = $_POST["id_pemilik"];
$query = "UPDATE pemilik SET nama_pemilik='$nama_pemilik', alamat='$alamat',no_hp='$no_hp' WHERE id_pemilik='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 

if($result > 0){
    echo "<script>
    alert('Pemilik berhasil di update');
    document.location.href = '../../pemilik/pemilik.php';
    </script>";
}else{
    echo "<script>
    alert('Pemilik gagal di update');
    document.location.href = '../../pemilik/pemilik.php';
    </script>";
}
?>