<?php
include "koneksi.php";
$idne = $_POST['IDNE']; 
$nama = $_POST['NAMA'];
$email = $_POST['EMAIL'];

//echo $nama.$email;

$sql_b = "UPDATE user set NAMA = '$nama',
                                EMAIL = '$email'
                                  WHERE ID = '$idne'";
      
//   echo $sql_b;
//   exit();
$hasil_b = mysqli_query($mysqli, $sql_b);

if($hasil_b){
    
    echo "<script>alert('Edit berhasil..');</script>";
    echo "<script>window.location='pake_ajax.html';</script>";
}
else{
        
    echo "<script>alert('Edit gagal cobalagi');</script>";
    echo "<script>window.location='pake_ajax.html';</script>";
    
}

?>

