<?php 
include_once'../../inc/config.php';
$id = $_GET["id"];
$query = "DELETE FROM dpi WHERE id_dpi='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 

if($result > 0) {
    echo "<script>
    alert('DPI berhasil di delete');
    document.location.href = '../../dpi/dpi.php';
  </script>";
} else {
    echo "<script>
    alert('DPI gagal di delete');
    document.location.href = '../../dpi/dpi.php';
  </script>";   
}
?>