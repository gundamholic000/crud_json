<?php
include "koneksi.php";
$id = $_GET['ID'];
//cari inputan lainnya;
$sql_a = "select * from user where ID = '$id'";
$hasil_a = mysqli_query($mysqli, $sql_a);
$result_a = mysqli_fetch_assoc($hasil_a);

$nama = $result_a['NAMA'];
$email= $result_a['EMAIL'];

//echo $id;

?>

 <form method="post" action="edit-action.php" id="a">
     <input type="text" name="NAMA" placeholder="Inputkan Nama" value="<?php echo $nama;?>"><br>
            <input type="text" name="EMAIL" placeholder="Inputkan Email" value="<?php echo $email;?>"><br>
            <input type="hidden" value="<?php echo $id;?>" name="IDNE">
            <input type="submit" value="Save" name="EDIT">
            
            
            
 </form>