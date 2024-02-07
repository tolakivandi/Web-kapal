<?php
include_once'../../inc/config.php';

$nama_kapal= $_POST['nama_kapal'];
$id_dpi= $_POST['id_dpi'];
$id_pemilik= $_POST['id_pemilik'];
$id_alat_tangkap= $_POST['id_alat_tangkap'];
$file = $_FILES['file_kapal'] ['name'];
$ukuran = $_FILES['file_kapal'] ['size'];
$tipe = $_FILES['file_kapal'] ['type'];
$tmp_file = $_FILES['file_kapal'] ['tmp_name'];

$path ="../upload/" .$file;

if($tipe == "image/jpeg" || $tipe =="image/png" ){

    if($ukuran <=1000000 ){

        if(move_uploaded_file($tmp_file,$path)){
            $result = mysqli_query($connection,"INSERT INTO pemilik(
                nama_pemilik,alamat,nomer_hp,file_pemilik) 
            VALUES('$nama_pemilik','$alamat','$nomer_hp','$file')");
        
            if($result){
                echo"
                <script>
                alert('selamat kamu berhasil menambahkan data');
                document.location.href ='../hasil/pemilik.php'
                </script>";
            }else{
                echo "tidak berhasil";
            }
        }else{
            echo"upload fail";
        }
    }else{
        echo"ukuran";
    }
}else{
    echo"tipe";
}

$data = mysqli_query($connection,"INSERT INTO kapal (nama_kapal,id_dpi,id_pemilik, id_alat_tangkap) VALUES ('$nama_kapal','$id_dpi','$id_pemilik',$id_alat_tangkap)");

if($data){
    echo "<script>
    alert('Kapal berhasil di tambahkan');
    document.location.href = '../../kapal/kapal.php';
    </script>";
}else{
    echo "<script>
    alert('Kapal gagal di tambahkan');
    document.location.href = '../../kapal/kapal.php';
    </script>";
}
?>