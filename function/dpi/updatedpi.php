<?php
include_once'../../inc/config.php';

$nama_dpi= $_POST['nama_dpi'];
$luas= $_POST['luas'];
$id = $_POST["id_dpi"];
$query = "UPDATE dpi SET nama_dpi='$nama_dpi', luas='$luas' WHERE id_dpi='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 
if($result > 0) {
    echo "<script>
    alert('DPI berhasil di update');
    document.location.href = '../../dpi/dpi.php';
  </script>";
} else {
    echo "<script>
    alert('DPI gagal di update');
    document.location.href = '../../dpi/dpi.php';
  </script>";   
}
?>