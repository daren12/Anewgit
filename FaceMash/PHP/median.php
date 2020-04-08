<?php
include('dbCon.php');

$sqlMedian = 'SELECT COUNT(*) FROM profil;';

$resultMedian = mysqli_query($conn, $sqlMedian); 

$rowMedian = mysqli_fetch_array($resultMedian);

$total = $rowMedian[0];


$medianCount = round($total / 2, 0); 


$realMedianCount = $medianCount - 1; // count from 0,1,2,3,4 = 1,2,3,4,5

$resultSql = "SELECT poang FROM profil ORDER BY poang ASC LIMIT ".$realMedianCount.",1;";

$resultXS = mysqli_query($conn, $resultSql); 

$TrueRowMedian = mysqli_fetch_row($resultXS);


 // 42









?>
