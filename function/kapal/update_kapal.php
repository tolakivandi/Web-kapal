<?php
include_once'../../inc/config.php';

$nama_kapal= $_POST['nama_kapal'];
$id_dpi= $_POST['id_dpi'];
$id_pemilik= $_POST['id_pemilik'];
$id_alat_tangkap= $_POST['id_alat_tangkap'];
$id = $_POST["id_kapal"];
$query = "UPDATE kapal SET nama_kapal='$nama_kapal',id_dpi='$id_dpi',id_pemilik='$id_pemilik',id_alat_tangkap='$id_alat_tangkap' WHERE id_kapal='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 
if($result > 0) {
    echo "<script>
    alert('Kapal berhasil di update');
    document.location.href = '../../kapal/kapal.php';
  </script>";
} else {
    echo "<script>
    alert('Kapal gagal di update');
    document.location.href = '../../kapal/kapal.php';
  </script>";   
}
?>