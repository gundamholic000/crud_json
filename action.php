<?php
header('Content-Type: application/json');
include "koneksi.php";
ini_set('display_errors', '0');

/* $res = $_GET['res'];

echo json_encode($res); */


$sql = "SELECT * FROM user";
//$sql = "SELECT * FROM order_confirm where LINK IS NOT NULL";
$hasil = mysqli_query($mysqli, $sql);
//$results = array();


foreach($hasil as $row){
    
    
    $array[] = array(

            'array1' => array('ID'=>$row[ID],'NAMA'=>$row[NAMA],'EMAIL'=>$row[EMAIL]), 
            'array2' => array('EDIT_LINK'=>$row[EDIT_LINK],'DELETE_LINK'=> $row[DELETE_LINK]) 
            
        
            //'array2' => array('something', 'something else'),
            
         );
	
//    $array1[] = array(
//	'ID'=> $row[ID],
//	'NAMA' => $row[NAMA],
//	'EMAIL' => $row[EMAIL],
//        
//            $array2[] = array(
//                
//                'EDIT_LINK'=> $row[EDIT_LINK],
//                'DELETE_LINK'=> $row[DELETE_LINK],
//                
//            )
//    );
}//end each

//$array = array(
//
//   'array1' => array('value' => 'another_value'), 
//   'array2' => array('something', 'something else'),
//   'array3' => array('value', 'value')
//);


//var_dump($results);

 $json = json_encode($array);
 //$json = json_encode("teasasdads");

echo $json; 



?>