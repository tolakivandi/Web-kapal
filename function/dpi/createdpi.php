<?php
include_once'../../inc/config.php';

$nama_dpi= $_POST['nama_dpi'];
$luas= $_POST['luas'];

$data = mysqli_query($connection,"INSERT INTO dpi (nama_dpi,luas) VALUES ('$nama_dpi',
'$luas')");

if($data){
    echo "<script>
    alert('DPI berhasil di tambahkan');
    document.location.href = '../../dpi/dpi.php';
    </script>";
}else{
    echo "<script>
    alert('DPI gagal di tambahkan');
    document.location.href = '../../dpi/dpi.php';
    </script>";
}
?>