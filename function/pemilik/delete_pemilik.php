<?php 
include_once'../../inc/config.php';
$id = $_GET["id"];
$query = "DELETE FROM pemilik WHERE id_pemilik='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 

if($result > 0) {
    echo "<script>
    alert('Pemilik berhasil di delete');
    document.location.href = '../../pemilik/pemilik.php';
  </script>";
} else {
    echo "<script>
    alert('Pemilik gagal di delete');
    document.location.href = '../../pemilik/pemilik.php';
  </script>";   
}
?>