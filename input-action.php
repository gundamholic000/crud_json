<?php
include "koneksi.php";


$nama = $_POST['NAMA'];
$email = $_POST['EMAIL'];

//echo $nama.$email;

//cari ID terakhir;
$sql_a = "select ID from user order by ID DESC limit 1";
$hasil_a = mysqli_query($mysqli, $sql_a);
$result_a = mysqli_fetch_assoc($hasil_a);

$last_id = $result_a['ID'] + 1;
//echo $last_id;

//insert Data
$sql_b = "INSERT INTO user set NAMA = '$nama',
                                EMAIL = '$email',
                                  EDIT_LINK = '<a href=edit.php?ID=$last_id>Edit</a>',
                                  DELETE_LINK = '<a href=delete.php?ID=$last_id onclick=\"return confirm(\'Yakin mau dihapus?\')\">Delete</a>'";
        
                                    
$hasil_b = mysqli_query($mysqli, $sql_b);
//$result_b = mysqli_fetch_assoc($hasil_b); 

//echo $result_b;

//exit();

if($hasil_b){
    
    echo "<script>alert('Input berhasil..');</script>";
    echo "<script>window.location='pake_ajax.html';</script>";
}
else{
        
    echo "<script>alert('Input gagal cobalagi');</script>";
    echo "<script>window.location='pake_ajax.html';</script>";
    
}



?>
