<?php
include "koneksi.php";
$id = $_GET['ID'];

//echo $id;


$sql_b = "DELETE FROM user WHERE ID = '$id'";
      
//   echo $sql_b;
//   exit();
$hasil_b = mysqli_query($mysqli, $sql_b);

if($hasil_b){
    
    //echo "<script>alert('Hapus berhasil..');</script>";
    echo "<script>window.location='pake_ajax.html';</script>";
}
else{
        
    echo "<script>alert('Hapus gagal cobalagi');</script>";
    echo "<script>window.location='pake_ajax.html';</script>";
    
}
