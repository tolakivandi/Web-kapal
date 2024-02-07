<?php 
include_once'../../inc/config.php';
$id = $_GET["id"];
$query = "DELETE FROM alat_tangkap WHERE id_alat_tangkap='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 

if($result > 0) {
    echo "<script>
    alert('Alat Tangkap berhasil di delete');
    document.location.href = '../../alat_tangkap/alat_tangkap.php';
  </script>";
} else {
    echo "<script>
    alert('Alat Tangkap gagal di delete');
    document.location.href = '../../alat_tangkap/alat_tangkap.php';
  </script>";   
}
?>