<?php
include_once'../../inc/config.php';

$nama_alat_tangkap= $_POST['nama_alat_tangkap'];
$id = $_POST["id_alat_tangkap"];
$query = "UPDATE alat_tangkap SET nama_alat_tangkap='$nama_alat_tangkap' WHERE id_alat_tangkap='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 

if($result > 0){
    echo "<script>
    alert('Alat Tangkap berhasil di update');
    document.location.href = '../../alat_tangkap/alat_tangkap.php';
    </script>";
}else{
    echo "<script>
    alert('Alat Tangkap gagal di update');
    document.location.href = '../../alat_tangkap/alat_tangkap.php';
    </script>";
}
?>