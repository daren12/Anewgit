<?php
include('dbCon.php');

$sqlLow = 'SELECT MIN(poang) AS value_MIN FROM profil;';


$resultLow = mysqli_query($conn, $sqlLow); 


$rowLow = mysqli_fetch_assoc($resultLow); 
$sumOfMin = $rowLow['value_MIN'];



?>


