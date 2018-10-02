<?php
include "config.php";

$request = $_POST['request'];    

if($request == 1){
    $search = $_POST['search'];
    $gsent = $conectar->prepare("SELECT * FROM users where articulo like '%$search%'");
    $gsent->execute(); 
    while($rows=$gsent->FETCH(PDO::FETCH_ASSOC)){
        $response[] = array("value"=>$rows['codigoArticulo'],"label"=>$rows['articulo']);
    }
    echo json_encode($response);
    exit;
}

if($request == 2){  
    $varCodigoArticulo = $_POST['varCodigoArticulo'];
    $gsent = $conectar->prepare("SELECT * FROM users where codigoArticulo ='$varCodigoArticulo'");
    $gsent->execute(); 
    $users_arr = array();   
    while($row=$gsent->FETCH(PDO::FETCH_ASSOC)){
        $varCodigoArticulo = $row['codigoArticulo'];
       // $fullname = $row['fname']." ".$row['lname']; 
        $articulo = $row['articulo']; 
        $users_arr[] = array("codigoArticulo" => $varCodigoArticulo, "articulo" => $articulo);
    } 
    echo json_encode($users_arr);
    exit;
}
 


?>