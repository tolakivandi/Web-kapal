<?php 
include_once'../../inc/config.php';
$id = $_GET["id"];
$query = "DELETE FROM kapal WHERE id_kapal='$id'";
mysqli_query($connection, $query);
$result = mysqli_affected_rows($connection); 

if($result > 0) {
    echo "<script>
    alert('Kapal berhasil di delete');
    document.location.href = '../../kapal/kapal.php';
  </script>";
} else {
    echo "<script>
    alert('Kapal gagal di delete');
    document.location.href = '../../kapal/kapal.php';
  </script>";   
}
?>