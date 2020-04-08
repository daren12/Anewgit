<?php

//poll.php

include('dbCon.php');

if(isset($_POST["poll_option"]))
{
	/*
	$sql = "
	INSERT INTO profil (Namn, img, kon, poang) VALUES ('".$_POST["poll_option"]."', '', '1', '1')
	";
	*/
	
	$sql = "
	UPDATE profil SET poang=poang + 1 WHERE Namn='".$_POST["poll_option"]."'
	";

	if(mysqli_query($conn, $sql)){
		true;
	} 

}



/*

*/

?>
