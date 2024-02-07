<?php
include_once'../../inc/config.php';

$nama_alat_tangkap= $_POST['nama_alat_tangkap'];

$data = mysqli_query($connection,"INSERT INTO alat_tangkap (nama_alat_tangkap) VALUES ('$nama_alat_tangkap')");

if($data){
    echo "<script>
    alert('Alat Tangkap berhasil di tambahkan');
    document.location.href = '../../alat_tangkap/alat_tangkap.php';
    </script>";
}else{
    echo "<script>
    alert('Alat Tangkap gagal di tambahkan');
    document.location.href = '../../alat_tangkap/alat_tangkap.php';
    </script>";
}
?>