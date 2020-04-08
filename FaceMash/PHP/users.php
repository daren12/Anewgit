<?php

/*
$sql = "SELECT * FROM profil;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);




∂
if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];

    }
}
∂
*/
include_once 'dbCon.php';
include 'SUM.php';



$sql = "SELECT id, NAMN, poang FROM profil order by rand() limit 2;";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$datas = array();

if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
    }
}

function Versus($row, $i, $a){
    global $datas;
    global $realNum;
    $data = $datas[$row][$i];
   
if($i == 'poang' and $a === 'SUM' ){

    echo $data * $realNum / 10;

}elseif ($a == 'poang') {
    echo $data;
}elseif ($a == 'SUMA') {
     $bitcoin = Versus();
}
else{
    echo $data;
}



}









?>

